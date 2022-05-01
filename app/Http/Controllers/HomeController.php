<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() 
    {
        // $total = DB::select(DB:raw("SELECT username FROM users where email='test@hotmail.com'"));
        $data = DB::table('speedtest_users')->select(DB::raw('date(timestamp) as tt, count(*) as co'))->groupBy('tt')->get();
        $address = '123 Bangkok';
        return view('home.index', compact('data','address'));
    }
}