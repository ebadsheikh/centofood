<?php

namespace App\Http\Requests\Mail;

use Illuminate\Foundation\Http\FormRequest;

class StoreMailRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'mail_mailer' => 'nullable|string',
            'mail_host' => 'nullable|string',
            'mail_port' => 'nullable|integer',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'nullable|email',
            'mail_from_name' => 'nullable|string',
            'development_mail_mailer' => 'nullable|string',
            'development_mail_host' => 'nullable|string',
            'development_mail_port' => 'nullable|integer',
            'development_mail_username' => 'nullable|string',
            'development_mail_password' => 'nullable|string',
            'development_mail_encryption' => 'nullable|string',
            'development_mail_from_address' => 'nullable|email',
            'development_mail_from_name' => 'nullable|string',
            'test_email_receiver' => 'nullable',
        ];
    }
}
