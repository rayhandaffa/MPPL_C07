<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        $current_date_time = Carbon::now()->toDateTimeString();
        // dd($current_date_time);
        // dd(Auth::user(),$cartItems,$request);
        // dd($request->address);
        // DB::insert("insert into order (address, total, status, time) values 
        //             ('$request->address', '$request->total', 'menunggu_pembayaran', '$current_date_time')");
                
        DB::table('orders')->insert([
			'address' => $request->address,
			'total' => $request->total,
			'status' => 'menunggu_pembayaran',
			'payment_status' => null,
            'shipping_method' => 'delivered',
            'payment_method' => 'va_mandiri',
            'id_user' => null
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
}
