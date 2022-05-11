<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    function index()
    {
        $data = DB::table('speedtest_users')->orderBy('id', 'asc')->paginate(5);
        return view('pagination', compact('data'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $data = DB::table('speedtest_users')
                ->where('ip', 'like', '%'.$query.'%')
                ->orWhere('userid', 'like', '%'.$query.'%')
                ->orWhere('subnet', 'like', '%'.$query.'%')
                ->orWhere('apname', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('pagination_data', compact('data'))->render();
        }
    }
}
