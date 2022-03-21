<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;

class RekomendasiSahamController extends Controller
{
    public function index()
    {
        $client = new Client();
        $res = $client->request('POST', env('URL_API_BACKEND').'/get-pattern', [
            'form_params' => [
                //
            ]
        ]);

        if ($res->getStatusCode() == 200) {
            $listPattern = json_decode($res->getBody()->getContents())->data;

            return view('user.rekomendasi-saham.index', compact('listPattern'));
        }else{
            return 'Error Fetch Data API';
        }
    }

    public function getBySignal($signal)
    {
        $option = DB::table('options')->where('users_id', auth()->user()->id)->first();

        $client = new Client();
        $res = $client->request('POST', env('URL_API_BACKEND').'/get-datasignal', [
            'form_params' => [
                'pattern' => $signal,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        if ($res->getStatusCode() == 200) {
            $listSaham = json_decode($res->getBody()->getContents())->data;

            return view('user.rekomendasi-saham.list-saham', compact('listSaham', 'signal'));
        }else{
            return 'Error Fetch Data API';
        }
    }

    public function detailSaham($signal, $symbol)
    {
        $option = DB::table('options')->where('users_id', auth()->user()->id)->first();

        $client = new Client();
        $res = $client->request('POST', env('URL_API_BACKEND').'/get-indicators', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        if ($res->getStatusCode() == 200) {
            $listIndicator = json_decode($res->getBody()->getContents())->data;

            return view('user.rekomendasi-saham.detail-saham', compact('listIndicator', 'signal', 'symbol'));
        }else{
            return 'Error Fetch Data API';
        }
    }
}
