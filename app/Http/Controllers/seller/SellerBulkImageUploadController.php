<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\SellerBulkImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SellerBulkImageUploadController extends Controller
{
    public function index()
    {
        $bulkImageListing = SellerBulkImage::select('path','id')->where('seller_id', Auth::user()->id)->get();
        return view('seller.bulk-product-gallary.index', compact('bulkImageListing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos' => 'required',
        ]);

        $productImagUpload = null;

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $key => $file) {
                $name = preg_replace('/\s+/', '', time() . '_' . Str::random(30) . '_' . $file->getClientOriginalExtension());
                $path = $file->storeAs('uploads/bulk-uploaded-images', $name, 'public');

                $productImagUpload = SellerBulkImage::create([
                    'seller_id' => Auth::user()->id,
                    'photos' => $name,
                    'path' => '/storage/' . $path,
                ]);
            }
        }

        if ($productImagUpload) {
            return redirect()->back()->with('success', 'Multiple File has been uploaded Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong with bulk upload');
        }
    }
}
