<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {
        // dd($request);
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'handphone' => $request->handphone,
            'email' => $request->email,
            'address' => $request->address
        ]);
		return redirect('/profile');
       
    }
}
