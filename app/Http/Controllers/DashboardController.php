<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (is_null($request->segment(2))) {
            $segment = $request->segment(1);
        } else {
            $segment = $request->segment(1).'/'.$request->segment(2);
        }
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        return view('dashboard', compact('access'));
    }
}
