<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSunBreak extends FormRequest
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
            //requireは、必須にする
            //nullable・・nullでもOK
            'title' => 'required|string|max:30',
            'buki' =>   'string|max:30|nullable',
            'soubi1' => 'required|string|max:30',
            'soubi2' => 'required|string|max:30',
            'soubi3' => 'required|string|max:30',
            'soubi4' => 'required|string|max:30',
            'soubi5' => 'required|string|max:30',
            'series' => 'required|gte:2',
            'gender' => 'required',
            'contact' => 'string|max:200|nullable',
            'photo' => 'required|image',
            'photo2' => 'required|image',
            'photo3' => 'required|image|nullable',
            'photo4' => 'required|image|nullable',
            'photo5' => 'required|image|nullable',
            'photo6' => 'required|image|nullable',
        ];
    }
}
