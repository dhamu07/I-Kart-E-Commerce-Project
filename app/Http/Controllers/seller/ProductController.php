<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariantImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        // $tree = Category::with(['parent','child'])->whereNull('parent_id')->get();

        // $data='';
        // $data = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>";
        // foreach ($tree as $category) {
        //     $data .= "<li><a href='#0' data-menu='electronics'>{$category->name}</a></li>";
        // }
        // $data .="</ul></div></div>";

        // foreach ($tree as $category) {
        //     $data .= ($category->child)?"<div class='sec_menu common_menu_wrap'><div class='{$category->name}'><ul><a href='#0' data-menu='electronics'>{$category->name}</a></ul></div></div>":"<div class='first_menu common_menu_wrap'><div class='top_menu'><ul><a href='#0' data-menu='electronics'>{$category->name}</a></ul></div></div>";
        // }
        // dump($data);
        //  $treesecond = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>{$this->data($tree->child)}</ul></div></div>";
        // dd($this->data($tree->child));
        return view('seller.product.single_product_listing');
    }

    public function store(Request $request)
    {
        $variants = json_decode($request->variants,true);

        $validatorVariant = Validator::make($variants, [
            '*.variant_size'=>'required',
            '*.SKU_id'=>'required',
            '*.variant_color'=>'required',
        ]);
        $validatorProduct = Validator::make($request->all(), [
            'sku'=>'required',
            'MRP'=>'required|integer',
            'selling_price'=>'required|integer',
            'HSN_code'=>'required',
            'GST'=>'required',
            'dispatch_in_day'=>'required|integer',
            'quantity'=>'required|integer',
            'local_delivery_charge'=>'required|integer',
            'zonal_delivery_charge'=>'required|integer',
            'national_delivery_charge'=>'required|integer',
            'length'=>'required|integer',
            'width'=>'required|integer',
            'weight'=>'required|integer',
            'height'=>'required|integer',
            'title'=>'required',
            'manufacturer'=>'required',
            'brand_name'=>'required',
            // 'description'=>'required',
            'keyword'=>'required',
            'key_features'=>'required',
            'meta_tags'=>'required',
            'return_order'=>'required',
            'return_order_in_day'=>'required',
            'country_of_origin'=>'required',
            'status'=>'required',
            'sale_price'=>'required',
            'product_image'=>'required',
            'color'=>'required',
            'size'=>'required',
            'model_no'=>'required',
            'pack_of'=>'required',
            'sale_start_date'=>'required',
            'sale_end_date'=>'required',
        ]);



        if ($validatorVariant->fails() || $validatorProduct->fails()) {

            return response()->json(['error'=>$validatorVariant->errors()->merge($validatorProduct->errors())]);
        }
        else
        {
            $product = new Product;
            $product->sku = $request->sku;
            $product->MRP = $request->MRP;
            $product->selling_price = $request->selling_price;
            $product->HSN_code = $request->HSN_code;
            $product->GST = $request->GST;
            $product->dispatch_in_day = $request->dispatch_in_day;
            $product->quantity = $request->quantity;
            $product->local_delivery_charge = $request->local_delivery_charge;
            $product->zonal_delivery_charge = $request->zonal_delivery_charge;
            $product->national_delivery_charge = $request->national_delivery_charge;
            $product->weight = $request->weight;
            $product->length = $request->length;
            $product->width = $request->width;
            $product->height = $request->height;
            $product->title = $request->title;
            $product->manufacturer = $request->manufacturer;
            $product->brand_name = $request->brand_name;
            $product->color = $request->color;
            $product->size = $request->size;
            $product->model_no = $request->model_no;
            $product->pack_of = $request->pack_of;
            $product->description = $request->description;
            $product->keyword = implode(',',$request->keyword);
            $product->key_features = implode(',',$request->key_features);
            $product->meta_tags = implode(',',$request->meta_tags);
            $product->return_order = $request->return_order;
            $product->return_order_in_day = $request->return_order_in_day;
            $product->sale_price = $request->sale_price;
            $product->sale_start_date = Carbon::parse($request->sale_start_date);
            $product->sale_end_date = Carbon::parse($request->sale_end_date);
            $product->country_of_origin = $request->country_of_origin;
            $product->qc_status = 1;
            $product->status = $request->status;
            $product->save();

            $productImageName = '';
            foreach ($request->product_image as $key => $productImage) {
                $imageName = 'product_'.$product->id.'_'.$key.'.'.$productImage->getClientOriginalExtension();
                $productImage->move(public_path('storage/product'), $imageName);
                $productImageName.=$imageName.',';
            }


            $product->productImage()->create([
                'src' => $productImageName,
                'alt' => 'no image',
            ]);


            foreach ($variants as $variant) {

                $variantData = $product->variants()->create(
                    [
                        'sku' => $variant['SKU_id'],
                        'size' => implode(',',$variant['variant_size']),
                        'color' => $variant['variant_color'],
                    ]

                );
                $variantImageName = '';

                foreach ($request['variantImages'][$variant['id']] as $key => $images) {
                    $imageName = 'variant_'.$variantData->id.'_'.$key.'.'.$images->getClientOriginalExtension();
                    $images->move(public_path('storage/product/variant'), $imageName);
                    $variantImageName.=$imageName.',';
                }
                ProductVariantImage::create([
                    'src' => $variantImageName,
                    'alt' => 'no image',
                    'variant_id'=> $variantData->id
                ]);


            }
            return response()->json(['success'=>'']);
        }
        # code...
    }
}
