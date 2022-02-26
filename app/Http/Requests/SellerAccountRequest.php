<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerAccountRequest extends FormRequest
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
            'phone_number' => 'required',
            'email' => 'required|unique:sellers,email',
            'password' => 'required',
            'company_name' => 'required',
            'gst_val' => 'required|unique:sellers,gst_number',
            'pan_number' => 'required',
            'bank_account_number' => 'required',
            'ifsc_code' => 'required',
            'business_address' => 'required',
            'business_type' => 'required',
            'cancel_cheque' => 'required',
            'pickup_address' => 'required',
            'gst_certificate' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
        ];
    }
}
