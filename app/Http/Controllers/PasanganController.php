<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PasanganController extends Controller
{
    function index(){
        $json=['pria'=>'Yulius','wanita'=>'Yessica'];
        $client=new Client();
        $hasil= $client->request('POST','http://localhost:10000',['json'=>$json])->getBody();
        // print_r(json_decode($hasil->getContents()));
        return $hasil;
    }
}
