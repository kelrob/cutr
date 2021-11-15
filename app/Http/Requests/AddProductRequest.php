<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'amount' => 'required',
            'goods_in_stock' => 'required',
            'file.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
            'description' => 'required',
        ];
    }
}
