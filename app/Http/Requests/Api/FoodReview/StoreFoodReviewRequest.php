<?php

namespace App\Http\Requests\Api\FoodReview;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'food_id' => 'required|integer|exists:foods,id',
            'user_id' => 'required|integer|exists:users,id',
            'rate' => 'required|integer',
            'review' => 'required|string|max:500',
        ];
    }
}
