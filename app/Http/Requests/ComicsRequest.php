<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' => 'required|max:50|min:3',
            'type' => 'required|max:50|min:3',
            'cover' => 'required|max:255|min:10',
        ];
    }

    public function messages()
    {
        return
        [
            'title.required' => 'Title is obbligatory',
            'title.max' => 'Title must have max :max characters',
            'title.min' => 'Title must have minimum :min character',
            'type.required' =>  'Type is obbligatory',
            'type.max' => 'Type must have max :max characters',
            'type.min' => 'Type must have minimum :min character',
            'cover.required' => 'Cover img is obbligatory',
            'cover.max' => 'Cover must have max :max characters',
            'cover.min' => 'Cover must have minimum :min character',
        ];
    }
}
