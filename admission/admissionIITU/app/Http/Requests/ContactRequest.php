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
            'name' => 'required',
            'message' => 'required|min:5',
            'phone' =>  'required'
        ];
    }


    //    public function attributes()
//    {
//        return [
//          'name' => 'имя'
//        ];
//    }
//
//    public function messages()
//    {
//        return [
//            'name.required' => 'Поля имя является обязательным',
//            'phone.required' => 'Поля телефон является обязательным',
//            'message.required' => 'Поля сообщения является обязательным',
//        ];
//    }
}
