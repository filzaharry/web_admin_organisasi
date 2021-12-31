<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(1).'/'.$request->segment(2);
        $menu = DB::table('menu')->select('id')->where('url', $segment)->first();
        $access = DB::table('akses')->where('level_user_id', Auth::user()->level_user_id)->where('menu_id', $menu->id)->first();

        $user = DB::table('users')
        ->selectRaw('users.id as id, users.name as name, users.username as username, users.email as email, level_users.nama_level_user as level')
        ->join('level_users','users.level_user_id','=','level_users.id')
        ->get();
        $level = DB::table('level_users')->get();
        return view('user.read', compact(
            'access', 'user', 'level'
        ));
    }
    public function add()
    {
        $level = DB::table('level_users')->get();
        return view('user.add', compact('level'));
    }
    public function add_post(UserRequest $request)
    {
        $request->validated();
        $fullname = $request->fullname;
        $username = $request->username;
        $email = $request->email;
        $level = $request->level;
        $password = $request->pass;
        $repeatPass = $request->repeatpass;

        if ($password != $repeatPass) {
            return redirect('konfigurasi/user/tambah')->withErrors('Opps!, Password tidak sama');
        }

        if ($request->active == null) {
            return redirect('konfigurasi/user/tambah')->withErrors('Opps!, Anda belum menyetujui keaslian data Anda');
        } 

        User::create([
            'name' => $fullname,
            'username' => $username,
            'email' => $email,
            'level_user_id' => $level,
            'password' => bcrypt($password),
            'remember_token' => Str::random(40),
        ]);


        Session::flash('sukses', 'Sukses Menambahkan User Baru!');

        return redirect('konfigurasi/user');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        Session::flash('sukses', 'Data Berhasil Dihapus !!!');
        return redirect('konfigurasi/user');
    }

    public function edit(Request $request, $id)
    {
        $fullname = $request->fullname;
        $username = $request->username;
        $email = $request->email;
        $level = $request->level;
        $password = $request->pass;
        $repeatPass = $request->repeatpass;

        if ($password != $repeatPass) {
            return redirect('konfigurasi/user')->withErrors('Opps!, Password tidak sama');
        }

        if ($request->active == null) {
            return redirect('konfigurasi/user')->withErrors('Opps!, Anda belum menyetujui keaslian data Anda');
        } 

        User::where('id', $id)->update([
            'name' => $fullname,
            'username' => $username,
            'email' => $email,
            'level_user_id' => $level,
            'password' => bcrypt($password),
            'remember_token' => Str::random(40),
        ]);

        Session::flash('sukses', 'Sukses Memperbaharui Data User !!!');
        return redirect('konfigurasi/user');
    }
}
