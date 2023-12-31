<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules = [
            'en.name' => 'required',
            'en.description' => 'required',
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.name'] = 'nullable|string';
            $rules[$locale . '.description'] = 'nullable|string';
        }

        $rules['slug'] = ['required',Rule::unique('categories')->ignore($this->category->id)];
        $rules['image'] = 'nullable|max:2048|mimes:jpeg,png,jpg';

        return $rules;
    }
}
