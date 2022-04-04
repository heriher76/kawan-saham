<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
Use Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $me = Auth::user();

        return view('user.my-profile', compact('me'));
    }

    public function update(Request $request)
    {
        $me = Auth::user();

        if (!empty($request->new_password)) {
            if ($request->new_password == $request->confirm_new_password) {
                $password = Hash::make($request->new_password);
            }else{
                toast('Password tidak sama, silahkan ulangi!', 'error');

                return back();
            }
        }

        DB::table('users')->where('id', $me->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password ?? $me->password
        ]);

        Alert::success('Berhasil!', 'Profil anda telah diperbaharui.');

        return back();
    }
}
