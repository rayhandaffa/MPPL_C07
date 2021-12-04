<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        // dd($request);
        // $cartItems = \Cart::getContent();
        // // dd($cartItems);
        // $current_date_time = Carbon::now()->toDateTimeString(); 
        DB::table('products')->insert([
			'name' => $request->name,
			'price' => $request->price,
			'description' => $request->description,
			'category' => $request->category,
            'status' => 1
		]);

       
		return redirect('/admin/product');
       
    }

    public function editProductStatus(Request $request)
    {
        if($request->status == 1)
            $new_status = 0;
        else    
            $new_status = 1;
        
        DB::table('products')->where('id',$request->id)->update([
            'status' => $new_status
        ]);
		return redirect('/admin/product');
       
    }

    public function editProduct(Request $request)
    {
        // dd($request);
        DB::table('products')->where('id',$request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description
        ]);
		return redirect('/admin/product');
       
    }
    public function deleteProduct(Request $request)
    {
        // dd($request);
        DB::table('products')->where('id',$request->id)->delete();
		return redirect('/admin/product');
       
    }

    public function openProductDetails(Request $request)
    {
        // dd($request);
        $product = DB::table('products')->where('id',$request->id)->first();
        // dd($product);
        return view('product-details', compact('product'));
		// return redirect('/product-details', compact('product'));
       
    }

    public function addProductReview(Request $request)
    {
        // dd($request);
        // $cartItems = \Cart::getContent();
        // // dd($cartItems);
        // $current_date_time = Carbon::now()->toDateTimeString(); 
        // dd($request);
        DB::table('reviews')->insert([
            'rating' => $request->rating,
			'name' => $request->name,
			'email' => $request->email,
			'description' => $request->description,
			'id_product' => $request->id
		]);

       
		return redirect('/product');
       
    }
}
