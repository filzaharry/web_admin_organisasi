<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\AksesRequest;
use App\Models\AksesMenu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AksesmenuController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1).'/'.$request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();


        $levelUser = $request->query('level');
        $paginate = $request->query('paginate');
        $search = $request->query('search');
        $level = DB::table('level_users')->get();
        
        $sub = DB::table('menu')->where('level_menu', 'sub_menu')->get();
        $getAccess = DB::table('akses')
                ->selectRaw('menu.url as url, menu.nama_menu as nama_menu, level_users.nama_level_user as level, menu.is_parent as is_parent, akses.akses as akses, akses.tambah as tambah, akses.edit as edit, akses.hapus as hapus, akses.id as id')
                ->join('menu', 'menu.id', '=', 'akses.menu_id')
                ->join('level_users', 'level_users.id', '=', 'akses.level_user_id')
                ->orderBy('akses.menu_id')
                ->get();

        return view('akses-menu.read', compact(
            'access',
            'getAccess',
            'level',
            'sub'
        ));
    }

    public function add()
    {
        $level = DB::table('level_users')->get();
        $main = DB::table('menu')->where('level_menu', 'main_menu')->orderBy('sort')->get();
        return view('akses-menu.add', compact('level','main'));
    }


    public function dropdown($id)
    {        
        $data = DB::table('menu')->select('id', 'nama_menu')->where('master_menu', $id)->orderBy('sort_sub')->get();
        return response()->json($data);
    }


    public function add_post(AksesRequest $request)
    {
        $request->validated();
        $level = $request->level;
        $read = $request->read;
        $create = $request->create;
        $edit = $request->edit;
        $delete = $request->delete;

        $sub = $request->sub_menu;
        $masterMenu = $request->main;

        $checkMenu = DB::table('akses')->where('level_user_id', $level)->where('menu_id', $sub)->first();
        $levelName = DB::table('level_users')->where('id', $level)->first();
        $menuName = DB::table('menu')->where('id', $sub)->first();

        if ($checkMenu) {
            $message = 'Opps!, Menu "' . $menuName->nama_menu .'" Pada Level "' . $levelName->nama_level_user .'" Sudah Digunakan.';
            return redirect('konfigurasi/akses/add')->withErrors($message);
        }
        
        $checkMaster = DB::table('akses')
                    ->join('menu','akses.menu_id','=','menu.id')
                    ->where('akses.level_user_id', $level)
                    ->where('akses.menu_id', $masterMenu)
                    ->first();

        if (is_null($checkMaster)) {
            AksesMenu::create([
                'level_user_id' => $level,
                'menu_id' => $masterMenu,
                'akses' => (is_null($read)) ? '0' : $read,
                'tambah' => (is_null($create)) ? '0' : $create,
                'hapus' => (is_null($delete)) ? '0' : $delete,
                'edit' => (is_null($edit)) ? '0' : $edit
            ]);
            AksesMenu::create([
                'level_user_id' => $level,
                'menu_id' => $sub,
                'akses' => (is_null($read)) ? '0' : $read,
                'tambah' => (is_null($create)) ? '0' : $create,
                'hapus' => (is_null($delete)) ? '0' : $delete,
                'edit' => (is_null($edit)) ? '0' : $edit
            ]);
        } else {
            AksesMenu::create([
                'level_user_id' => $level,
                'menu_id' => $sub,
                'akses' => (is_null($read)) ? '0' : $read,
                'tambah' => (is_null($create)) ? '0' : $create,
                'hapus' => (is_null($delete)) ? '0' : $delete,
                'edit' => (is_null($edit)) ? '0' : $edit
            ]);
        }

        Session::flash('sukses', 'Sukses Menambahkan Akses Menu Baru!');

        return redirect('konfigurasi/akses');
    }

    public function edit(Request $request, $id)
    {
        $read = $request->read;
        $create = $request->create;
        $edit = $request->edit;
        $delete = $request->delete;

        AksesMenu::where('id', $id)->update([
            'akses' => (is_null($read)) ? '0' : $read,
            'tambah' => (is_null($create)) ? '0' : $create,
            'hapus' => (is_null($delete)) ? '0' : $delete,
            'edit' => (is_null($edit)) ? '0' : $edit
        ]);

        Session::flash('sukses', 'Sukses Mengubah Data Akses Menu !');

        return redirect('konfigurasi/akses');
    }

    public function delete($id)
    {
        AksesMenu::where('id', $id)->delete();
        Session::flash('sukses', 'Data Berhasil Dihapus !!!');
        return redirect('konfigurasi/akses');
    }


}
