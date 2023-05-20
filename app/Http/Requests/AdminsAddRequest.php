<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsAddRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم المستخدم مطلوب',
            'image.required' => 'صورة الحساب مطلوب',
            'username.required' => ' البريد الإلكتروني مطلوب',
            'email.required' => ' الحساب مطلوب',
            'password.required' => ' كلمة السر مطلوبة',
            'password_confirm.required' => 'تأكيد كلمة السر مطلوبة  ',
        ];
    }
}
