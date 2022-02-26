<?php

namespace App\Http\Controllers\seller\api;

use App\Http\Controllers\Controller;
use App\Jobs\SellerOtpEmailJob;
use App\Rules\OnlyGmail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Tzsk\Otp\Facades\Otp;
use App\Models\Category;

class ApiController extends Controller
{
    public function generateOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => ['required', 'unique:sellers', 'max:255', new OnlyGmail],
        ]);

        $email = $request->post('email');

        $otp = Otp::digits($otpDigits)->expiry($expiryMinute)->generate($email);

        $otpExpiredTime = Carbon::now()->addMinutes($expiryMinute);

        if ($otp) {

            \App\Models\Otp::updateOrCreate([
                'types' => '0',
                'email' => $email,
            ], [
                'otp' => $otp,
                'expired_at' => $otpExpiredTime,
            ]);

            $mailDetails = [
                'email' => $email,
                'otp' => $otp,
            ];

            $this->dispatch(new SellerOtpEmailJob($mailDetails));

            return response(["status" => 200, "message" => "OTP sent successfully, Please check your mail !", "email" => $email]);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong !']);
        }
    }

    public function validateOtp(Request $request)
    {
        $otpDigits = 6;
        $expiryMinute = 3;

        $request->validate([
            'email' => 'required',
            'otp' => 'required',
        ]);

        $email = $request->post('email');

        $otp = $request->post('otp');

        $checkOtp = Otp::digits($otpDigits)->expiry($expiryMinute)->check($otp, $email);

        if ($checkOtp) {
            return response(["status" => 200, "message" => "Email verification is successfully completed !"]);
        } else {
            return response(["status" => 422, 'message' => 'Your OTP is expire or Invalid OTP please send again!']);
        }
    }

    public function validateGstNumber(Request $request)
    {
        $request->validate([
            'gst_number' => ['required', 'unique:sellers'],
        ]);

        $regex = "/^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9a-zA-Z]{1})+$/";

        $validateGstNumber = preg_match($regex, $request->post('gst_number'));

        if ($validateGstNumber) {
            return response(["status" => 200, "message" => "Gst number is successfully verified !"]);
        } else {
            return response(["status" => 422, "message" => "Please check your Gst number !"]);
        }
    }

    public function mainCategory()
    {
        $categories = Category::where('parent_id', 0)->limit(18)->orderBy('id', 'ASC')->get();
        return response()->json($categories);
    }

    public function childCategory($category_id)
    {
        $first = Category::select('id', 'name', 'slug')->where('parent_id', $category_id)->get();
        $single = [];
        $double = [];
        foreach ($first as $f) {
            $childrens = Category::select('id', 'name', 'slug')->where('parent_id', $f->id)->limit(4)->orderBy('id', 'DESC')->get();
            if (count($childrens) > 0) {
                $f->childrens = $childrens;
                $double[] = $f;
            } else {
                $single[] = $f;
            }
        }
        $data = [
            'single' => $single,
            'double' => $double
        ];
        return response()->json($data);
    }
}
