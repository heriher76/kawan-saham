<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class OptionController extends Controller
{
    public function setCountry($code)
    {
        $user = auth()->user();

        $option = DB::table('options')->where('users_id', $user->id)->first();

        if ($option == null) {
            DB::table('options')->insert([
                'users_id' => $user->id,
                'country' => $code,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }else{
            DB::table('options')->where('users_id', $user->id)->update([
                'country' => $code,
                'updated_at' => Carbon::now()
            ]);
        }

        return back();
    }
}
