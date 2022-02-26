<?php

namespace App\Http\Controllers\seller\auth;

use App\Helpers\ImageCommonHelpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SellerAccountRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Seller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;

class RegistrationController extends Controller
{
    public function index()
    {
        $countries = Country::pluck('name', 'id');
        return view('seller.auth.register', compact('countries'));
    }

    public function getState(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->pluck('name', 'id');
        return response()->json($states);
    }

    public function getCity(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function createSellerAccount(SellerAccountRequest $request): Response|Application|ResponseFactory
    {
        $sellerDetails = $request->all();

        $sellerDetails['gst_number'] = $request->post('gst_val');

        $sellerDetails['password'] = Hash::make($sellerDetails['password']);

        if ($request->file('gst_certificate')) {
            $filename = ImageCommonHelpers::save($_FILES['gst_certificate'], 'sellerAccountDetails/sellerGstCertificate');
            $sellerDetails['gst_certificate'] = $filename;
        }

        if ($request->file('cancel_cheque')) {
            $filename = ImageCommonHelpers::save($_FILES['cancel_cheque'], 'sellerAccountDetails/sellerCancelCheque');
            $sellerDetails['cancel_cheque'] = $filename;
        }

        $sellerAccounts = Seller::create($sellerDetails);

        if ($sellerAccounts) {
            return response(["status" => 200, 'message' => 'Your Seller Account Successfully Created, Waiting for admin approval!']);
        } else {
            return response(["status" => 422, 'message' => 'Oops something went wrong, Please try again later !']);
        }
    }

}
