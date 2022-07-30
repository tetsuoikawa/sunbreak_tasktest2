<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //authorizeは、認証しているかの判定をする
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     //validationの条件を書く
    public function rules()
    {
        return [
            //
            'your_name' => 'required|string|max:20',
            //uniqueは、同じユーザーダメというやつなので、なくてもいい
            'email' => 'required|email|unique:users|max:255',
            'url' => 'url|nullable',
            'gender' => 'required',
            'age' => 'required',
            'contact' => 'required|string|max:200',
            'caution' => 'required|accepted',
        ];
    }
}
