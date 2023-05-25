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
            'family-name' => ['required', 'string', 'max:255'],
            'given-name' => ['required', 'string', 'max:255'],
            'gender'=> ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'string', 'max:8'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['max:255'],
            'opinion' => ['required','string'],

        ];
    }

    public function messages()
        {
        return [
                'family-name.required' => '名前を入力してください',
                'family-name.string' => '名前を文字列で入力してください',
                'family-name.max' => '名前を255文字以下で入力してください',
                'given-name.required' => '名前を入力してください',
                'given-name.string' => '名前を文字列で入力してください',
                'given-name.max' => '名前を255文字以下で入力してください',
                'gender.required' => '選択してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.string' => 'メールアドレスを文字列で入力してください',
                'email.email' => '有効なメールアドレス形式を入力してください',
                'email.max' => 'メールアドレスを255文字以下で入力してください',
                'postcode.required' => '数字を入力してください',
                'postcode.string' => '数字を文字列で入力してください',
                'postcode.max' => 'ハイフンありで8文字以下で入力してください',
                'address.required' => '住所を入力してください',
                'address.string' => '住所を文字列で入力してください',
                'address.max' => '住所を255文字以下で入力してください',
                'building_name.max' => '建物名を255文字以下で入力してください',
                'opinion.required' => 'ご意見を入力してください',
                'opinion.string' => 'ご意見を文字列で入力してください',
            ];
    }
}