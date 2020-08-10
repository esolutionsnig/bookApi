<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required|unique:books',
            'isbn' => 'required|unique:books',
            'number_of_pages' => 'required',
            'publisher' => 'required',
            'country' => 'required',
            'release_date' => 'required',
            'authors' => 'required',
        ];
    }
}
