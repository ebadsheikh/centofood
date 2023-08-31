<?php

namespace App\Http\Controllers\Api;

use App\Actions\ApiFoodReview\StoreFoodReviewAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\FoodReview\StoreFoodReviewRequest;
use App\Http\Resources\FoodReviewResource;
use App\Models\FoodReview;
use Exception;
use Illuminate\Validation\ValidationException;

class FoodReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function foodReview($food_id)
    {
        try {
            $reviews = FoodReview::with('user')
                ->with('food')
                ->where('food_id', $food_id)
                ->paginate(12);
            return FoodReviewResource::collection($reviews);
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
    public function foodReviewStore(StoreFoodReviewRequest $request, StoreFoodReviewAction $action)
    {
        try {
            $validatedData = $request->validated();
            $foodReview = $action->execute($validatedData);

            return response()->json(new FoodReviewResource($foodReview), 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function recentFoodReview()
    {
        try {
            $reviews = FoodReview::with('user')
                ->with('food')
                ->latest('created_at')
                ->limit(5)
                ->get();

            return FoodReviewResource::collection($reviews);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
