<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\UserLevel;
use Illuminate\Support\Facades\Session;

class UserLevelController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1).'/'.$request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $level = DB::table('level_users')
            ->get();
        return view('user-level.read', compact('access','level'));
    }

    public function delete($id)
    {
        $check = DB::table('akses')->where('level_user_id', $id)->first();
        if (!is_null($check)) {
            return redirect('konfigurasi/user-level')->withErrors('Level User Masih Digunakan, Harap hapus semua akses sebelum level user diHapus');
        }
        UserLevel::where('id', $id)->delete();
        Session::flash('sukses', 'Data Berhasil Dihapus !!!');
        return redirect('konfigurasi/user-level');
    }

    public function edit(Request $request, $id)
    {
        UserLevel::where('id', $id)->update([
            'nama_level_user' => $request->namalevel
        ]);
        Session::flash('sukses', 'Data Berhasil Diupdate !!!');
        return redirect('konfigurasi/user-level');
    }

    public function add()
    {
        return view('user-level.add');
    }

    public function add_post(Request $request)
    {
        $rules = ['nama_level_user' => 'required|unique:level_users'];
        $customMessages = ['required' => ':attribute harus diisi !!!','unique' => ':attribute sudah digunakan !!!'];
        $this->validate($request, $rules, $customMessages);

        UserLevel::create(['nama_level_user' => $request->nama_level_user]);

        return redirect('konfigurasi/user-level');
    }
}
