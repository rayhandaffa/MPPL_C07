<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $cartItems = \Cart::getContent();
        dd($cartItems,$request);
        // DB::table('produk')->insert([
		// 	'pegawai_nama' => $request->nama,
		// 	'pegawai_jabatan' => $request->jabatan,
		// 	'pegawai_umur' => $request->umur,
		// 	'pegawai_alamat' => $request->alamat
		// ]);
		// alihkan halaman ke halaman pegawai
		// return redirect('/pegawai');
        // \Cart::update(
        //     $request->id,
        //     [
        //         'quantity' => [
        //             'relative' => false,
        //             'value' => $request->quantity
        //         ],
        //     ]
        // );

        // session()->flash('success', 'Item Cart is Updated Successfully !');

        // return redirect()->route('cart.list');
    }
}
