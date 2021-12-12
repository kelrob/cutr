<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'location' => 'required',
            'banner' => 'required',
            'banner_heading' => 'required',
            'banner_sub_heading' => 'required',
            'cta_btn_text' => 'required',
            'cta_btn_link' => 'required',

        ];
    }
}
