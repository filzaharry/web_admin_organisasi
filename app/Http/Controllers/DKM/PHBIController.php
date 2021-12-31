<?php

namespace App\Http\Controllers\DKM;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class PHBIController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1) . '/' . $request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $data = ['1'];
        return view('dkm.phbi.read', compact('access','data'));
    }
}
