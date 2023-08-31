<?php

namespace App\Http\Controllers\Api;

use App\Actions\ApiWishList\StoreWishListAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\WishList\StoreWishListRequest;
use App\Http\Resources\WishListResource;
use App\Models\WishList;
use Illuminate\Validation\ValidationException;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function wishListShow($userId)
    {
        try {
            $wishLists = WishList::with('user', 'food')
                ->where('user_id', $userId)->get();
            return response()->json([
                'message' => 'wishlists retrieved successfully',
                'data' => WishListResource::collection($wishLists),
            ], 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wishListStore(StoreWishListRequest $request, StoreWishListAction $action)
    {
        try {
            $validatedData = $request->validated();
            $wishList = $action->execute($validatedData);

            return response()->json([
                'message' => 'wishlist created successfully',
                'data' => new WishListResource($wishList),
            ], 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @param DeleteCategoryAction $action
     * @return RedirectResponse
     */
    public function wishListDelete(WishList $wishList)
    {
        try {
            $wishList->delete();

            return response()->json([
                'message' => 'wishlist deleted successfully',
            ], 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }
}
