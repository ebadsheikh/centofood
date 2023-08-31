<?php

namespace App\Http\Requests\TermAndCondition;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTermAndConditionRequest extends FormRequest
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
            'en.description' => 'required',
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.description'] = 'nullable|string';
        }

        $rules['slug'] = ['required',Rule::unique('term_and_conditions')->ignore($this->termAndCondition->id)];

        return $rules;
    }
}
