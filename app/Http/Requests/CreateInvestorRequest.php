<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInvestorRequest extends FormRequest
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
            'phone' => 'required',
            'type' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống tên',
            'phone.required' => 'Không được bỏ trống SĐT',
            // 'refer_phone.required' => 'Không được bỏ trống SĐT người giới thiệu',
            'type.required' => 'Không được bỏ trống loại thành viên',

        ];
    }
}
