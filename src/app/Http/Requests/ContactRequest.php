<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'lastname'=>'required',
            'firstname'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'postcode'=>'required|size:8',
            'address'=>'required',
            'opinion'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'lastname.required'=>'姓を入力してください',
            'firstname.required'=>'名を入力してください',
            'gender.required'=>'性別を選択してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレス形式で入力してください',
            'postcode.required'=>'郵便番号を入力してください',
            'postcode.size'=>'ハイフンを含めた8文字で入力してください',
            'address.required'=>'住所を入力してください',
            'opinion.required'=>'ご意見を入力してください'
        ];
    }
}

