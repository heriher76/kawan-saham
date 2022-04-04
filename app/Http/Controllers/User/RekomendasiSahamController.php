<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;
use Carbon\Carbon;

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
        $resIndicator = $client->request('POST', env('URL_API_BACKEND').'/get-indicators', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        $resIncomeStatement = $client->request('POST', env('URL_API_BACKEND').'/get-income-statement', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        $resDataGraph = $client->request('POST', env('URL_API_BACKEND').'/get-data', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        $resInformation = $client->request('POST', env('URL_API_BACKEND').'/get-info', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        $resDetailInformation = $client->request('POST', env('URL_API_BACKEND').'/get-detail-info', [
            'form_params' => [
                'ticker' => $symbol,
                'country' => $option->country ?? 'ID'
            ]
        ]);

        if ($resIndicator->getStatusCode() == 200 && $resIncomeStatement->getStatusCode() == 200 && $resDataGraph->getStatusCode() == 200 && $resInformation->getStatusCode() == 200 && $resDetailInformation->getStatusCode() == 200) {
            $listIndicator = json_decode($resIndicator->getBody()->getContents())->data;
            $listIncomeStatement = json_decode($resIncomeStatement->getBody()->getContents())->data;
            $listDataGraph = json_decode($resDataGraph->getBody()->getContents())->data;
            $information = json_decode($resInformation->getBody()->getContents())->data;

            $arrayNetIncome = [];
            foreach($listIncomeStatement as $value) {
                array_push($arrayNetIncome, $value->{'Net Income'});
            } 

            $arrayRevenue = [];
            foreach($listIncomeStatement as $value) {
                array_push($arrayRevenue, $value->{'Total Revenue'});
            } 

            $arrayYear = [];
            foreach($listIncomeStatement as $value) {
                array_push($arrayYear, Carbon::parse($value->{'Date'})->year);
            } 

            $labelDateGraph = array_filter(array_column($listDataGraph, 'Date'));

            $detailInformation = json_decode($resDetailInformation->getBody()->getContents())->data;

            return view('user.rekomendasi-saham.detail-saham', compact('listIndicator', 'listIncomeStatement', 'signal', 'symbol', 'arrayNetIncome', 'arrayRevenue', 'arrayYear', 'labelDateGraph', 'listDataGraph', 'information', 'detailInformation'));
        }else{
            return 'Error Fetch Data API';
        }
    }
}
