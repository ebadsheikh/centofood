<?php

namespace App\Http\Controllers\Api;

use App\Actions\ApiRestaurantReview\StoreRestaurantReviewAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RestaurantReview\StoreRestaurantReviewRequest;
use App\Http\Resources\RestaurantReviewResource;
use App\Models\RestaurantReview;
use Exception;
use Illuminate\Validation\ValidationException;

class RestaurantReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function restaurantReview($restaurant_id)
    {
        try {
            $reviews = RestaurantReview::with('user')
                ->where('restaurant_id', $restaurant_id)
                ->paginate(12);
            return RestaurantReviewResource::collection($reviews);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restaurantReviewStore(StoreRestaurantReviewRequest $request, StoreRestaurantReviewAction $action)
    {
        try {
            $validatedData = $request->validated();
            $restaurantReview = $action->execute($validatedData);

            return response()->json(new RestaurantReviewResource($restaurantReview), 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        }
    }
}
