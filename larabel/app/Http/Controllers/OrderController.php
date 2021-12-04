<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        // dd($request);
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        $current_date_time = Carbon::now()->toDateTimeString();
        // dd($current_date_time);
        // dd(Auth::user(),$cartItems,$request);
        // dd($request->address);
        // DB::insert("insert into order (address, total, status, time) values 
        //             ('$request->address', '$request->total', 'menunggu_pembayaran', '$current_date_time')");
                
        DB::table('orders')->insert([
            'name' => $request->name,
			'address' => $request->address,
			'total' => $request->total,
			'status' => 'menunggu_pembayaran',
			'payment_status' => null,
            'shipping_method' => $request->shipping_method,
            'payment_method' => $request->payment_method,
            'id_user' => null,
            'created_at' => \Carbon\Carbon::now()
		]);

        $order_id = DB::table('orders')->orderBy('id', 'desc')->first()->id;
        //dd($order_id);

        foreach($cartItems as $item){
            DB::table('order_details')->insert([
                'id_order' => $order_id,
                'id_product' => $item->id,
                'quantity' => $item->quantity
            ]);
        }
		// alihkan halaman ke halaman pegawai
		return redirect('/payment');
       
    }
   
    public function editOrderStatus(Request $request)
    {
        

        // $name = $request->file('proof')->getClientOriginalName();
 
        // // $path = $request->file('proof')->store('public/product');
        // $path = $request->file('proof')->storeAs(
        //     'product', $name
        // );
            
        // dd($name, $path);

        if($request->status == "menunggu_pembayaran")
            $new_status = "menunggu_konfirmasi";
        else if($request->status == "menunggu_konfirmasi")
            $new_status = "disiapkan";
        else if($request->status == "disiapkan")
            $new_status = "dikirim";
        else    
            $new_status = "selesai";
        
        DB::table('orders')->where('id',$request->id)->update([
            'status' => $new_status
        ]);
		return redirect('/admin/order');
       
    }

    public function checkOrderStatus(Request $request)
    {
        $order = DB::table('orders')->where('id',$request->id)->first();
        
		return view('check-status', compact('order'));
       
    }
}
