<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $option = DB::table('options')->where('users_id', auth()->user()->id)->first();

        $client = new Client();
        $resCalendar = $client->request('POST', env('URL_API_BACKEND').'/get-economic-calendar', [
            'form_params' => [
                'country' => $option->country ?? 'ID'
            ]
        ]);

        $resStockID = $client->request('POST', env('URL_API_BACKEND').'/get-list-stock', [
            'form_params' => [
                'country' => 'ID'
            ]
        ]);

        $resStockUS = $client->request('POST', env('URL_API_BACKEND').'/get-list-stock', [
            'form_params' => [
                'country' => 'US'
            ]
        ]);

        $resPattern = $client->request('POST', env('URL_API_BACKEND').'/get-pattern', [
            'form_params' => [

            ]
        ]);

        $resIndicator = $client->request('POST', env('URL_API_BACKEND').'/get-indicators', [
            'form_params' => [
                'country' => 'ID',
                'ticker' => 'BBRI'
            ]
        ]);

        if ($resCalendar->getStatusCode() == 200 && $resStockID->getStatusCode() == 200 && $resStockUS->getStatusCode() == 200 && $resPattern->getStatusCode() == 200) {
            $listCalendar = json_decode($resCalendar->getBody()->getContents())->data;
            $jumlahStockID = count(json_decode($resStockID->getBody()->getContents())->data);
            $jumlahStockUS = count(json_decode($resStockUS->getBody()->getContents())->data);
            $jumlahPattern = count(get_object_vars(json_decode($resPattern->getBody()->getContents())->data));
            $jumlahIndicator = count(json_decode($resIndicator->getBody()->getContents())->data);

            return view('user.dashboard', compact('listCalendar', 'jumlahStockID', 'jumlahStockUS', 'jumlahPattern', 'jumlahIndicator'));
        }else{
            return 'Error Fetch Data API';
        }
    }
}
