<?php

namespace App\Http\Requests\Mail;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMailRequest extends FormRequest
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
            'mail_host' => 'required',
            'mail_mailer' => 'required',
            'mail_username' => 'required',
            'mail_port' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required',
            'mail_from_name' => 'required',

            'development_mail_host' => 'required',
            'development_mail_mailer' => 'required',
            'development_mail_username' => 'required',
            'development_mail_port' => 'required',
            'development_mail_password' => 'required',
            'development_mail_encryption' => 'required',
            'development_mail_from_address' => 'required',
            'development_mail_from_name' => 'required',
        ];
    }
}
