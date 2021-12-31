<?php


use App\Http\Controllers\AksesmenuController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DKM\PHBIController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLevelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// template
Route::get('konfigurasi/template', [TemplateController::class, 'index'])->name('template');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('konfigurasi/daftar-menu', [DaftarMenuController::class, 'index']);
    Route::get('konfigurasi/daftar-menu/add', [DaftarMenuController::class, 'add_master'])->name('add-master');
    Route::post('konfigurasi/daftar-menu/add', [DaftarMenuController::class, 'add_master_post'])->name('add-master-post');
    Route::get('konfigurasi/daftar-menu/{id}', [DaftarMenuController::class, 'detail'])->name('detail');
    Route::post('konfigurasi/daftar-menu/edit/{id}', [DaftarMenuController::class, 'edit_master'])->name('edit-master');
    Route::get('konfigurasi/daftar-menu/delete/{id}', [DaftarMenuController::class, 'delete_master'])->name('delete-master');
    Route::get('konfigurasi/daftar-menu/main-dropdown/{icon_name}', [DaftarMenuController::class, 'main_dropdown']);
    Route::get('konfigurasi/daftar-menu/{id}/add', [DaftarMenuController::class, 'add_sub'])->name('add-sub');
    Route::post('konfigurasi/daftar-menu/{id}/add', [DaftarMenuController::class, 'add_sub_post'])->name('add-sub-post');
    Route::post('konfigurasi/daftar-menu/{id}/edit/{id_sub}', [DaftarMenuController::class, 'edit_sub'])->name('edit-sub');
    Route::get('konfigurasi/daftar-menu/{id}/delete/{id_sub}', [DaftarMenuController::class, 'delete_sub'])->name('delete-sub');

    Route::get('konfigurasi/user', [UserController::class, 'index'])->name('user');
    Route::get('konfigurasi/user/add', [UserController::class, 'add'])->name('add-user');
    Route::post('konfigurasi/user/add/post', [UserController::class, 'add_post'])->name('add-user-post');
    Route::get('konfigurasi/user/delete/{id}', [UserController::class, 'delete'])->name('delete-user');
    Route::post('konfigurasi/user/edit/{id}', [UserController::class, 'edit'])->name('edit-user');

    Route::get('konfigurasi/user-level', [UserLevelController::class, 'index'])->name('user-level');
    Route::get('konfigurasi/user-level/add', [UserLevelController::class, 'add'])->name('add-user-level');
    Route::post('konfigurasi/user-level/add/post', [UserLevelController::class, 'add_post'])->name('add-user-level-post');
    Route::get('konfigurasi/user-level/delete/{id}', [UserLevelController::class, 'delete'])->name('delete-user-level');
    Route::post('konfigurasi/user-level/edit/{id}', [UserLevelController::class, 'edit'])->name('edit-user-level');

    Route::get('konfigurasi/akses', [AksesmenuController::class, 'index'])->name('akses');
    Route::get('konfigurasi/akses/add', [AksesmenuController::class, 'add'])->name('add-akses');
    Route::post('konfigurasi/akses/add/post', [AksesmenuController::class, 'add_post'])->name('add-akses-post');
    Route::get('konfigurasi/akses/delete/{id}', [AksesmenuController::class, 'delete'])->name('delete-akses');
    Route::post('konfigurasi/akses/edit/{id}', [AksesmenuController::class, 'edit'])->name('edit-akses');
    Route::get('konfigurasi/akses/dropdown/{id}', [AksesmenuController::class, 'dropdown']);

    Route::get('konfigurasi/icon', [IconController::class, 'index'])->name('icon');
    Route::get('konfigurasi/icon/add', [IconController::class, 'add'])->name('add-icon');
    Route::post('konfigurasi/icon/add/post', [IconController::class, 'add_post'])->name('add-icon-post');
    Route::get('konfigurasi/icon/delete/{id}', [IconController::class, 'delete'])->name('delete-icon');
    Route::post('konfigurasi/icon/edit/{id}', [IconController::class, 'edit'])->name('edit-icon');


    // modulees DKM
    Route::get('dkm/phbi', [PHBIController::class, 'index'])->name('phbi');
    Route::get('dkm/phbi/add', [PHBIController::class, 'add'])->name('add-phbi');
    Route::post('dkm/phbi/add/post', [PHBIController::class, 'add_post'])->name('add-phbi-post');
    Route::get('dkm/phbi/delete/{id}', [PHBIController::class, 'delete'])->name('delete-phbi');
    Route::post('dkm/phbi/edit/{id}', [PHBIController::class, 'edit'])->name('edit-phbi');

    Route::get('dkm/surat-keluar-masuk', [MataUangController::class, 'index'])->name('surat-keluar-masuk');
    Route::get('dkm/surat-keluar-masuk/add', [MataUangController::class, 'add'])->name('add-surat-keluar-masuk');
    Route::post('dkm/surat-keluar-masuk/add/post', [MataUangController::class, 'add_post'])->name('add-surat-keluar-masuk-post');
    Route::get('dkm/surat-keluar-masuk/delete/{id}', [MataUangController::class, 'delete'])->name('delete-surat-keluar-masuk');
    Route::post('dkm/surat-keluar-masuk/edit/{id}', [MataUangController::class, 'edit'])->name('edit-surat-keluar-masuk');

    Route::get('dkm/laporan-keuangan', [MataUangController::class, 'index'])->name('laporan-keuangan');
    Route::get('dkm/laporan-keuangan/add', [MataUangController::class, 'add'])->name('add-laporan-keuangan');
    Route::post('dkm/laporan-keuangan/add/post', [MataUangController::class, 'add_post'])->name('add-laporan-keuangan-post');
    Route::get('dkm/laporan-keuangan/delete/{id}', [MataUangController::class, 'delete'])->name('delete-laporan-keuangan');
    Route::post('dkm/laporan-keuangan/edit/{id}', [MataUangController::class, 'edit'])->name('edit-laporan-keuangan');

    Route::get('dkm/struktur-organisasi', [MataUangController::class, 'index'])->name('struktur-organisasi');
    Route::get('dkm/struktur-organisasi/add', [MataUangController::class, 'add'])->name('add-struktur-organisasi');
    Route::post('dkm/struktur-organisasi/add/post', [MataUangController::class, 'add_post'])->name('add-struktur-organisasi-post');
    Route::get('dkm/struktur-organisasi/delete/{id}', [MataUangController::class, 'delete'])->name('delete-struktur-organisasi');
    Route::post('dkm/struktur-organisasi/edit/{id}', [MataUangController::class, 'edit'])->name('edit-struktur-organisasi');

    // modulees YPI
    Route::get('ypi/santri', [MataUangController::class, 'index'])->name('santri');
    Route::get('ypi/santri/add', [MataUangController::class, 'add'])->name('add-santri');
    Route::post('ypi/santri/add/post', [MataUangController::class, 'add_post'])->name('add-santri-post');
    Route::get('ypi/santri/delete/{id}', [MataUangController::class, 'delete'])->name('delete-santri');
    Route::post('ypi/santri/edit/{id}', [MataUangController::class, 'edit'])->name('edit-santri');

    Route::get('ypi/surat-keluar-masuk', [MataUangController::class, 'index'])->name('surat-keluar-masuk');
    Route::get('ypi/surat-keluar-masuk/add', [MataUangController::class, 'add'])->name('add-surat-keluar-masuk');
    Route::post('ypi/surat-keluar-masuk/add/post', [MataUangController::class, 'add_post'])->name('add-surat-keluar-masuk-post');
    Route::get('ypi/surat-keluar-masuk/delete/{id}', [MataUangController::class, 'delete'])->name('delete-surat-keluar-masuk');
    Route::post('ypi/surat-keluar-masuk/edit/{id}', [MataUangController::class, 'edit'])->name('edit-surat-keluar-masuk');

    Route::get('ypi/laporan-keuangan', [MataUangController::class, 'index'])->name('laporan-keuangan');
    Route::get('ypi/laporan-keuangan/add', [MataUangController::class, 'add'])->name('add-laporan-keuangan');
    Route::post('ypi/laporan-keuangan/add/post', [MataUangController::class, 'add_post'])->name('add-laporan-keuangan-post');
    Route::get('ypi/laporan-keuangan/delete/{id}', [MataUangController::class, 'delete'])->name('delete-laporan-keuangan');
    Route::post('ypi/laporan-keuangan/edit/{id}', [MataUangController::class, 'edit'])->name('edit-laporan-keuangan');

    Route::get('ypi/struktur-organisasi', [MataUangController::class, 'index'])->name('struktur-organisasi');
    Route::get('ypi/struktur-organisasi/add', [MataUangController::class, 'add'])->name('add-struktur-organisasi');
    Route::post('ypi/struktur-organisasi/add/post', [MataUangController::class, 'add_post'])->name('add-struktur-organisasi-post');
    Route::get('ypi/struktur-organisasi/delete/{id}', [MataUangController::class, 'delete'])->name('delete-struktur-organisasi');
    Route::post('ypi/struktur-organisasi/edit/{id}', [MataUangController::class, 'edit'])->name('edit-struktur-organisasi');



    // modulees RAMAH
    Route::get('ramah/buat-agenda', [MataUangController::class, 'index'])->name('buat-agenda');
    Route::get('ramah/buat-agenda/add', [MataUangController::class, 'add'])->name('add-buat-agenda');
    Route::post('ramah/buat-agenda/add/post', [MataUangController::class, 'add_post'])->name('add-buat-agenda-post');
    Route::get('ramah/buat-agenda/delete/{id}', [MataUangController::class, 'delete'])->name('delete-buat-agenda');
    Route::post('ramah/buat-agenda/edit/{id}', [MataUangController::class, 'edit'])->name('edit-buat-agenda');

    Route::get('ramah/surat-keluar-masuk', [MataUangController::class, 'index'])->name('surat-keluar-masuk');
    Route::get('ramah/surat-keluar-masuk/add', [MataUangController::class, 'add'])->name('add-surat-keluar-masuk');
    Route::post('ramah/surat-keluar-masuk/add/post', [MataUangController::class, 'add_post'])->name('add-surat-keluar-masuk-post');
    Route::get('ramah/surat-keluar-masuk/delete/{id}', [MataUangController::class, 'delete'])->name('delete-surat-keluar-masuk');
    Route::post('ramah/surat-keluar-masuk/edit/{id}', [MataUangController::class, 'edit'])->name('edit-surat-keluar-masuk');

    Route::get('ramah/laporan-keuangan', [MataUangController::class, 'index'])->name('laporan-keuangan');
    Route::get('ramah/laporan-keuangan/add', [MataUangController::class, 'add'])->name('add-laporan-keuangan');
    Route::post('ramah/laporan-keuangan/add/post', [MataUangController::class, 'add_post'])->name('add-laporan-keuangan-post');
    Route::get('ramah/laporan-keuangan/delete/{id}', [MataUangController::class, 'delete'])->name('delete-laporan-keuangan');
    Route::post('ramah/laporan-keuangan/edit/{id}', [MataUangController::class, 'edit'])->name('edit-laporan-keuangan');

    Route::get('ramah/sir', [MataUangController::class, 'index'])->name('sir');
    Route::get('ramah/sir/add', [MataUangController::class, 'add'])->name('add-sir');
    Route::post('ramah/sir/add/post', [MataUangController::class, 'add_post'])->name('add-sir-post');
    Route::get('ramah/sir/delete/{id}', [MataUangController::class, 'delete'])->name('delete-sir');
    Route::post('ramah/sir/edit/{id}', [MataUangController::class, 'edit'])->name('edit-sir');

    Route::get('ramah/struktur-organisasi', [MataUangController::class, 'index'])->name('struktur-organisasi');
    Route::get('ramah/struktur-organisasi/add', [MataUangController::class, 'add'])->name('add-struktur-organisasi');
    Route::post('ramah/struktur-organisasi/add/post', [MataUangController::class, 'add_post'])->name('add-struktur-organisasi-post');
    Route::get('ramah/struktur-organisasi/delete/{id}', [MataUangController::class, 'delete'])->name('delete-struktur-organisasi');
    Route::post('ramah/struktur-organisasi/edit/{id}', [MataUangController::class, 'edit'])->name('edit-struktur-organisasi');


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
