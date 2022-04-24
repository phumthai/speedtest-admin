<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalChartController extends Controller
{
    public function index()
    {
        $total = DB::select('SELECT timestamp,COUNT(*) as co FROM speedtest_users GROUP BY timestamp', array(1));
        $address = '123 Bangkok';
        return View::make('graph.total', compact('address'));
    }
}