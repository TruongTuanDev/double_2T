<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            're_password' => 'required|same:password',
            'name' => 'required',
            'phone' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Bạn chưa nhập vào email.',
            'phone' => 'Bạn chưa nhập vào số điện thoại',
            'email.email' => 'Email chưa đúng định dạng',
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'password.required' => 'Bạn chưa nhập vào mật khẩu.',
            're_password' => 'Mật khẩu nhập lại không khớp'
        ];
    }
}
