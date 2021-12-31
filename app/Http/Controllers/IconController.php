<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Icon;
use Illuminate\Support\Facades\Session;

class IconController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1).'/'.$request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $data = Icon::paginate(20);
        return view('icons.read', compact(
            'access',
            'data'
        ));
    }
    public function add()
    {
        return view('icons.add');
    }
    public function add_post(Request $request)
    {
        $rules = ['name' => 'required|unique:icons'];
        $customMessages = ['required' => ':attribute harus diisi !!!','unique' => ':attribute sudah digunakan !!!'];
        $this->validate($request, $rules, $customMessages);

        $icon = $request->name;

        Icon::create([
            'name' => $icon
        ]);

        Session::flash('sukses', 'Sukses Menambahkan Ikon Baru!');

        return redirect('konfigurasi/icon');
    }

    public function delete($id)
    {
        Icon::where('id', $id)->delete();
        Session::flash('sukses', 'Data Berhasil Dihapus !!!');
        return redirect('konfigurasi/icon');
    }

    public function edit(Request $request, $id)
    {
        $rules = ['name' => 'required|unique:icons'];
        $customMessages = ['required' => 'Nama Ikon harus diisi !!!','unique' => 'Nama Ikon sudah digunakan !!!'];
        $this->validate($request, $rules, $customMessages);

        $icon = $request->name;

        Icon::where('id', $id)->update([
            'name' => $icon
        ]);

        Session::flash('sukses', 'Sukses Memperbarui Ikon !!!');

        return redirect('konfigurasi/icon');
    }
}
