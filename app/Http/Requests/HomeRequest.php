<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function messages()
    {
       return [
           'name.required' => '名前は必ず入力して下さい。',
           'type.required' => '種類番号を入力してください。',
           'type.integer' => '種類番号を整数で入力してください。',
           'price.required' => '値段は必ず入力してください。',
           'price.integer' => '値段は整数で入力してください。',
           'price.between' => '値段は0～2000の間で入力してください。',
           'img.required' => '画像のパスは必ず入力して下さい。',
           'user_id.required' => '登録者IDは必ず入力して下さい。',
           'user_id.exists' => '登録者IDが存在しません。',
       ];
    }
}
