<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BookmarkRequest extends FormRequest
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
            'title' => [
                'required',
                'min:5',
                Rule::unique('campaigns', 'title')->ignore($this->campaigns)
            ]
           
        ];
    }

    // public function messages(){
    //     return [
    //         'name.required'=> "can't left empty....",
    //         'name.min'=> "must be at least 3 ch...."
    //     ];
    // }
}
