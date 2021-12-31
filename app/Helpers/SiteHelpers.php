<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteHelpers
{
    public static function main_menu()
    {
        $main_menu = DB::table("akses")
        ->join('menu','menu.id','=','akses.menu_id')
        ->select('menu.*','akses.akses','akses.tambah','akses.edit','akses.hapus')
        ->where('akses.level_user_id', Auth::user()->level_user_id)
        ->where('menu.level_menu', 'main_menu')
        ->where('menu.aktif', 'Y')
        ->where('akses', 1)
        ->orderBy('sort')
        ->get();

        return $main_menu;
    }
    public static function sub_menu()
    {
        $sub_menu = DB::table("akses")
        ->join('menu','menu.id','=','akses.menu_id')
        ->select('menu.*','akses.akses','akses.tambah','akses.edit','akses.hapus')
        ->where('akses.level_user_id', Auth::user()->level_user_id)
        ->where('menu.level_menu', 'sub_menu')
        ->where('menu.aktif', 'Y')
        ->where('akses', 1)
        ->orderBy('sort_sub')
        ->get();

        return $sub_menu;
    }

}
