<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouponRequest extends FormRequest
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
     * Prepares the data for validation by converting the 'enabled' field to a string value of '1' or '0'.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->has('enabled') ? $enabled = '1' : $enabled = '0';
        $this->merge(['enabled' => $enabled]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules['slug'] = 'required|unique:coupons,slug';
        $rules['code'] = 'required';
        $rules['discount_type_id'] = 'required';
        $rules['discountable_id'] = 'nullable';
        $rules['discount'] = 'required';
        $rules['expiry_date'] = 'nullable';
        $rules['description'] = 'nullable';
        $rules['enabled'] = 'nullable';

        return $rules;
    }
}
