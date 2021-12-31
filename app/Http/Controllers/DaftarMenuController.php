<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\DaftarMenuRequest;
use App\Models\Menus;
use Illuminate\Support\Facades\Session;

class DaftarMenuController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1) . '/' . $request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $icons = DB::table('icons')->get();
        $main_menu = DB::table('menu')->where('level_menu', 'main_menu')->orderBy('sort')->get();
        return view('daftar-menu.read', compact(
            'access',
            'main_menu',
            'icons'
        ));
    }

    public function detail(Request $request, $id)
    {
        $segment = $request->segment(1) . '/' . $request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $icons = DB::table('icons')->get();
        $detail = DB::table('menu')->where('id', $id)->get();
        $submenu = DB::table('menu')->where('master_menu', $id)->orderBy('sort_sub')->get();
        return view('daftar-menu.subtable', compact(
            'access',
            'detail',
            'submenu',
            'icons'
        ));
    }

    public function add_master()
    {
        $icons = DB::table('icons')->get();
        return view('daftar-menu.addmain', compact('icons'));
    }

    public function main_dropdown($icon_name)
    {
        $data = DB::table('icons')->select('name')->where('name', $icon_name)->first();
        return response()->json($data);
    }

    public function add_master_post(DaftarMenuRequest $request)
    {
        $request->validated();
        $masterMenu = $request->nama_menu;
        $string_route = str_replace(' ', '-', $request->nama_menu);
        $route = preg_replace('/[^A-Za-z0-9\-]/', '', $string_route);

        $parent = $request->parent;
        if ($request->active == null) {
            $status = 'N';
        } else {
            $status = $request->active;
        }

        $sort = $request->sort;
        $icon = $request->icon;

        Menus::create([
            'nama_menu' => $masterMenu,
            'level_menu' => 'main_menu',
            'master_menu' => 0,
            'url' => strtolower($route),
            'aktif' => $status,
            'sort' => $sort,
            'sort_sub' => 0,
            'is_parent' => $parent == "1" ? $parent : "0",
            'icon' => $icon
        ]);

        Session::flash('sukses', 'Sukses Menambahkan Master Menu Baru!');

        return redirect('konfigurasi/daftar-menu');
    }

    public function edit_master(Request $request, $id)
    {
        $masterMenu = $request->name;

        $parent = $request->parent;
        if ($request->active == null) {
            $status = 'N';
        } else {
            $status = $request->active;
        }

        $sort = $request->sort;
        $icon = $request->icon;

        Menus::where('id', $id)->update([
            'nama_menu' => $masterMenu,
            'level_menu' => 'main_menu',
            'master_menu' => 0,
            'aktif' => $status,
            'sort' => $sort,
            'sort_sub' => 0,
            'icon' => $icon,
            'is_parent' => $parent == "1" ? $parent : "0"
        ]);

        Session::flash('sukses', 'Sukses Update Menu !!!');

        return redirect('konfigurasi/daftar-menu');
    }

    public function delete_master($id)
    {
        Menus::where('id', $id)->delete();
        Menus::where('master_menu', $id)->delete();
        Session::flash('sukses', 'Menu Berhasil Dihapus !!!');

        return redirect('konfigurasi/daftar-menu');
    }

    public function add_sub($id)
    {
        $icons = DB::table('icons')->get();
        $detail = DB::table('menu')->where('id', $id)->get();
        return view('daftar-menu.addsub', compact(
            'detail',
            'icons'
        ));
    }
    public function add_sub_post(DaftarMenuRequest $request, $id)
    {
        $request->validated();
        $master = DB::table('menu')->where('id', $id)->first();
        $submenu = $request->nama_menu;

        $string_route = str_replace(' ', '-', $request->nama_menu);
        $route = preg_replace('/[^A-Za-z0-9\-]/', '', $string_route);

        if ($request->active == null) {
            $status = 'N';
        } else {
            $status = $request->active;
        }
        $icon = $request->icon;
        $sort = $request->sort;

        $sortUnique = DB::table('menu')->where('sort_sub', $sort)->where('master_menu', $master->id)->count();
        // return $sortUnique;
        if ($sortUnique != 0) {
            $message = 'Opps!, Urutan Sudah digunakan di Menu ' . $master->nama_menu;
            return redirect('konfigurasi/daftar-menu/' . $id . '/add')->withErrors($message);
        }

        Menus::create([
            'nama_menu' => $submenu,
            'level_menu' => 'sub_menu',
            'master_menu' => $id,
            'url' => $master->url . '/' . strtolower($route),
            'icon' => $icon,
            'aktif' => $status,
            'sort' => 0,
            'sort_sub' => $sort
        ]);

        Session::flash('sukses', 'Sukses Menambahkan Sub Menu Baru!');

        return redirect('konfigurasi/daftar-menu/' . $id);
    }

    public function edit_sub(Request $request, $id, $id_sub)
    {
        $subMenu = $request->name;
        $parent = $request->parent;
        if ($request->active == null) {
            $status = 'N';
        } else {
            $status = $request->active;
        }

        $sort = $request->sort;
        $icon = $request->icon;

        Menus::where('id', $id_sub)->update([
            'nama_menu' => $subMenu,
            'level_menu' => 'sub_menu',
            'master_menu' => $id,
            'aktif' => $status,
            'sort' => 0,
            'sort_sub' => $sort,
            'icon' => $icon,
            'is_parent' => $parent == "1" ? $parent : "0"
        ]);

        Session::flash('sukses', 'Sukses Update Menu !!!');

        return redirect('konfigurasi/daftar-menu/' . $id);
    }

    public function delete_sub($id, $id_sub)
    {
        Menus::where('id', $id_sub)->delete();
        Session::flash('sukses', 'Menu Berhasil Dihapus !!!');

        return redirect('konfigurasi/daftar-menu/' . $id);
    }
}
