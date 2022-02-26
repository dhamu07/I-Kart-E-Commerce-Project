<?php

namespace App\Http\Controllers\seller\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Mail\ResetSellerPassword;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('seller.auth.reset-password.forgot-password');
    }

    /**
     * Validate token for forgot password
     *
     * @param token
     * @return view
     */
    public function forgotPasswordValidate($token)
    {
        $seller = Seller::where('token', $token)->where('is_verified', 0)->first();
        if ($seller) {
            $email = $seller->email;
            return view('seller.auth.reset-password.change-password', compact('email'));
        } else {
            return redirect()->route('seller.send-forgot-password-link')->with('error', 'Password reset link is expired');
        }
    }

    /**
     * Reset password
     *
     * @param request
     * @return response
     */
    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $seller = Seller::where('email', $request->email)->first();
        if (!$seller) {
            return back()->with('error', 'Failed! Seller email is not registered.');
        }

        $token = Str::random(60);

        $seller['token'] = $token;
        $seller['is_verified'] = 0;
        $seller->save();

        Mail::to($request->email)->send(new ResetSellerPassword($seller->company_name, $token));

        if (Mail::failures() != 0) {
            return back()->with('success', 'Success! password reset link has been sent to your email');
        } else {
            return back()->with('error', 'Failed! there is some issue with email provider');
        }
    }

    /**
     * Change password
     *
     * @param request
     * @return response
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $user = Seller::where('email', $request->email)->first();

        if ($user) {
            $user['is_verified'] = 0;
            $user['token'] = '';
            $user['password'] = Hash::make($request->password);
            $user->save();
            return redirect()->route('seller.login')->with('success', 'Success! password has been changed');
        } else {
            return redirect()->route('seller.seller-forget-password')->with('error', 'Failed! something went wrong');
        }
    }
}
