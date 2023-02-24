<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class PasanganController extends Controller
{
    function __construct()
    {
        // $this->middleware('Yus');
    }
    function index(){
        // $json=['pria'=>'Yulius','wanita'=>'Yessica'];
        // $client=new Client();
        // print_r(session());
        // print_r(asset('database/.gitignore'));
        Log::debug('YusChika');
        // $hasil= $client->request('POST','http://localhost:10000',['json'=>$json])->getBody();
        // // print_r(json_decode($hasil->getContents()));
        // return $hasil;
        // return(Auth::user());
        // config(['Yus.Chika'=>'CINTA']);
        // print_r(Config::all());
        // return response(Config::all(),200,['content-type'=>'text/html']);
        // return $client->request('post','http://127.0.0.1:10000',['json'=>['Yulius'=>'Yessica']])->getBody();
    }
}
