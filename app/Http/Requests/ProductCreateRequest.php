<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'title' => 'required|unique:producties|min:5|max:50',
            'sku' => 'required|unique:producties|min:3|max:50',
            'description' => 'required|min:5|max:100',
            'short_description' => 'required|min:5|max:50',
            'price' => 'required|numeric|min:1',
            'in_stock' => 'required|boolean',
            'count' => 'required|numeric|min:1',
            'thumbnail' => 'required|mimes:jpeg'
        ];
    }
}


