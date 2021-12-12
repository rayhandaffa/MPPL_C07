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
        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('', $name, 'product_file');
     
        DB::table('products')->insert([
			'name' => $request->name,
			'price' => $request->price,
			'description' => $request->description,
			'category' => $request->category,
            'status' => 1,
            'photo' => $path
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
        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('', $name, 'product_file');
        DB::table('products')->where('id',$request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'photo' => $path
        ]);
		return redirect('/admin/product');
    }
    public function deleteProduct(Request $request)
    {
        // dd($request);
        DB::table('products')->where('id',$request->id)->delete();
		return redirect('/admin/product');
    }

    public function openProductDetails($id)
    {
        // dd($id);
        $product = DB::table('products')->where('id',$id)->first();
        // dd($product);
        return view('product-details', compact('product'));
		// return redirect('/product-details', compact('product'));
       
    }

    public function addProductReview(Request $request)
    {
       rbon::now()->toDateTimeString(); 
        // dd($request);
        DB::table('reviews')->insert([
            'rating' => $request->rating,
			'name' => $request->name,
			'email' => $request->email,
			'description' => $request->description,
			'id_product' => $request->id
		]);
		return redirect()->route('product.details.open', ['id' => $request->id]);
    }

    public function addProductQuestion(Request $request)
    {
       
        DB::table('questions')->insert([
			'name' => $request->name,
			'email' => $request->email,
			'description' => $request->description,
			'id_product' => $request->id
		]);
		return redirect()->route('product.details.open', ['id' => $request->id]);
    }
}
