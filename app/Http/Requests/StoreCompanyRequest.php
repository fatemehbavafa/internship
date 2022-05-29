<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone' => ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.required' => 'نام شرکت الزامی است',
            'company_name.string' => 'نام شرکت نامعتبر است',
            'company_name.max' => 'نام شرکت طولانی است',
            'first_name.required' => 'نام مدیر شرکت الزامی است',
            'first_name.string' => 'نام مدیر شرکت نامعتبر است',
            'first_name.max' => 'نام مدیر شرکت طولانی است',
            'last_name.required' => 'نام خانوادگی مدیر شرکت الزامی است',
            'last_name.string' => 'نام خانوادگی مدیر شرکت نامعتبر است',
            'last_name.max' => 'نام خانوادگی مدیر شرکت طولانی است',
            'email.required' => 'ایمیل الزامی است',
            'email.string' => 'ایمیل نامعتبر است',
            'email.email' => 'ایمیل نامعتبر است',
            'email.max' => 'ایمیل طولانی است',
            'email.unique' => 'این ایمیل قبلا ثبت شده است',
            'password.required' => 'رمز عبور الزامی است',
            'password.confirmed' => 'تکرار رمز عبور با رمز عبور برابر نمی باشد',
            'password.min' => 'کلمه عبور باید حداقل 8 کاراکتر باشد',
            'phone.required' => 'شماره تلفن الزامی است',
            'phone.integer' => 'شماره تلفن نامعتبر است',
            'phone.max' => 'شماره تلفن طولانی است',
            'address.required' => 'آدرس الزامی است',
            'address.string' => 'آدرس نامعتبر است',
            'address.max' => 'آدرس طولانی است'
        ];
    }

}
