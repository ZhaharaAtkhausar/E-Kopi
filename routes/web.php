<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\NeracaController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\ImporController;

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
Route::get('/', function () { return view('beranda'); });


Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('register', [RegisterController::class,'register']);

Route::get('password/forget',  function () {
	return view('pages.forgot-password');
})->name('password.forget');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');

Route::get('kecamatan', [KecamatanController::class, 'getKec']);
Route::get('desa', [KecamatanController::class, 'getDesa']);
Route::get('/koperasi/count',[KoperasiController::class, 'countKoperasi']);

Route::group(['middleware' => 'auth'], function(){
	// logout route
	Route::get('/logout', [LoginController::class,'logout']);
	Route::get('/clear-cache', [HomeController::class,'clearCache']);

	// dashboard route
	Route::get('/dashboard', function () {
		return view('pages.dashboard');
	})->name('dashboard');

	//only those have manage_user permission will get access
	Route::group(['middleware' => 'can:manage_user'], function(){
	Route::get('/users', [UserController::class,'index']);
	Route::get('/user/get-list', [UserController::class,'getUserList']);
		Route::get('/user/create', [UserController::class,'create']);
		Route::post('/user/create', [UserController::class,'store'])->name('create-user');
		Route::get('/user/{id}', [UserController::class,'edit']);
		Route::post('/user/update', [UserController::class,'update']);
		Route::get('/user/delete/{id}', [UserController::class,'delete']);
	});

	//only those have manage_role permission will get access
	Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
		Route::get('/roles', [RolesController::class,'index']);
		Route::get('/role/get-list', [RolesController::class,'getRoleList']);
		Route::post('/role/create', [RolesController::class,'create']);
		Route::get('/role/edit/{id}', [RolesController::class,'edit']);
		Route::post('/role/update', [RolesController::class,'update']);
		Route::get('/role/delete/{id}', [RolesController::class,'delete']);
	});


	//only those have manage_permission permission will get access
	Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
		Route::get('/permission', [PermissionController::class,'index']);
		Route::get('/permission/get-list', [PermissionController::class,'getPermissionList']);
		Route::post('/permission/create', [PermissionController::class,'create']);
		Route::get('/permission/update', [PermissionController::class,'update']);
		Route::get('/permission/delete/{id}', [PermissionController::class,'delete']);
	});

	// get permissions
	Route::get('get-role-permissions-badge', [PermissionController::class,'getPermissionBadgeByRole']);


	// permission examples
    Route::get('/permission-example', function () {
    	return view('permission-example');
    });
    // API Documentation
    Route::get('/rest-api', function () { return view('api'); });
    // Editable Datatable
	Route::get('/table-datatable-edit', function () {
		return view('pages.datatable-editable');
	});

	//Import
	Route::get('file-import-export', [ImporController::class, 'fileImportExport']);
	Route::post('file-import', [ImporController::class, 'fileImport'])->name('file-import');

    //Neraca view
    Route::get('/koperasi/profileresiko/{id}', [NeracaController::class, 'dtresiko']);
    Route::get('/koperasi/tatakelola/{id}', [NeracaController::class, 'dttata']);
    Route::get('/koperasi/neraca/{id}', [NeracaController::class, 'index']);
    Route::get('/koperasi/datakeuangan/{id}', [NeracaController::class, 'datakeuangan']);
    Route::get('/koperasi/neraca/', [NeracaController::class, 'koperasi']);
    Route::get('/koperasi/tabelkesehatan/', [NeracaController::class, 'sehat']);
    Route::get('/koperasi/tabelkesehatan/print', [NeracaController::class, 'print']);
    Route::get('/koperasi/tatakelola/', [NeracaController::class, 'tatakelola']);
    Route::get('/koperasi/profileresiko/', [NeracaController::class, 'profilresiko']);
    Route::get('/koperasi/permodalan/', [NeracaController::class, 'permodalan']);
    Route::get('/koperasi/datakeuangan/', [NeracaController::class, 'keuangan']);
    Route::get('/koperasi/hasil-sertifikat/', [NeracaController::class, 'sertifikat']);

	Route::get('/koperasi-kuk/tatakelola/', [NeracaController::class, 'ksptatakelola']);
    Route::get('/koperasi-kuk/profileresiko/', [NeracaController::class, 'kspprofilresiko']);
    Route::get('/koperasi-kuk/permodalan/', [NeracaController::class, 'ksppermodalan']);
    Route::get('/koperasi-kuk/datakeuangan/', [NeracaController::class, 'kspkeuangan']);
	Route::get('/koperasi-kuk/tabelkesehatan/', [NeracaController::class, 'kspsehat']);
	Route::get('/koperasi-kuk/tabelkesehatan/print', [NeracaController::class, 'kspprint']);

    //Koperasi
    Route::get('/koperasi/tambah', function () {
		return view('koperasi.create');
	});
	Route::get('/koperasi/cari',[KoperasiController::class, 'filter']);
	Route::get('search', [KoperasiController::class, 'search']);
    Route::get('/koperasi/get-list', [KoperasiController::class, 'getKoperasiList']);
    Route::post('/koperasi/tambah',[KoperasiController::class, 'store']);
    Route::get('/koperasi', [KoperasiController::class, 'index']);
    Route::get('/koperasi/detail/{id}', [KoperasiController::class, 'detail']);
    Route::get('/koperasi/edit/{id}', [KoperasiController::class, 'edit']);
    Route::post('/koperasi/edit/{id}', [KoperasiController::class, 'update']);
    Route::get('/koperasi/{id}', [KoperasiController::class, 'destroy']);
	Route::get('/kecamatan/cari',[KoperasiController::class, 'cariKec']);
	Route::get('/kecamatan/select',[KoperasiController::class, 'selectKec']);
	Route::get('/desa/select',[KoperasiController::class, 'selectDesa']);
	Route::get('/desa/cari',[KoperasiController::class, 'cariDesa']);
	Route::get('/desa/all',[KoperasiController::class, 'desaAll']);
	Route::get('/jenis/cari',[KoperasiController::class, 'cariJenis']);

	//Edit
	Route::get('/edit/sertifikat/tatakelola/', function () {
		return view('edit.stepsatu');
	});
	Route::get('/edit/sertifikat/profilresiko', function () {
		return view('edit.stepdua');
	});
    Route::get('/edit/sertifikat/aktivalancar', function () {
		return view('edit.steptiga');
	});
    Route::get('/edit/sertifikat/investasipanjang', function () {
		return view('edit.stepempat');
	});
    Route::get('/edit/sertifikat/aktivatetap', function () {
		return view('edit.steplima');
	});
    Route::get('/edit/sertifikat/aktivatdkberwujud', function () {
		return view('edit.stepenam');
	});
    Route::get('/edit/sertifikat/aktivalain', function () {
		return view('edit.steptujuh');
	});
    Route::get('/edit/sertifikat/hutangjangkapendek', function () {
		return view('edit.stepdelapan');
	});
    Route::get('/edit/sertifikat/hutangjangkapanjang', function () {
		return view('edit.stepsembilan');
	});
    Route::get('/edit/sertifikat/ekuitas', function () {
		return view('edit.stepsepuluh');
	});
    Route::get('/edit/sertifikat/partisipasianggota', function () {
		return view('edit.stepsebelas');
	});
    Route::get('/edit/sertifikat/pendaptannonanggota', function () {
		return view('edit.stepduabelas');
	});
    Route::get('/edit/sertifikat/bebananggota', function () {
		return view('edit.steptigabelas');
	});
    Route::get('/edit/sertifikat/bebannonanggota', function () {
		return view('edit.stepempatbelas');
	});
    Route::get('/edit/sertifikat/bebanusaha', function () {
		return view('edit.steplimabelas');
	});
    Route::get('/edit/sertifikat/bebanperkoperasian', function () {
		return view('edit.stepenambelas');
	});
    Route::get('/edit/sertifikat/pendapatanlain', function () {
		return view('edit.steptujuhbelas');
	});
    Route::get('/edit/sertifikat/biayalain', function () {
		return view('edit.stepdelapanbelas');
	});
    Route::get('/edit/sertifikat/pajakpenghasilan', function () {
		return view('edit.stepsembilanbelas');
	});
    Route::get('/edit/sertifikat/pembiayaanbermasalah', function () {
		return view('edit.stepduapuluh');
	});
    Route::get('/edit/sertifikat/agunan', function () {
		return view('edit.stepduasatu');
	});

	Route::get('/sertifikat/aktivalancar/{id}', [EditController::class, 'tiga']);
	Route::get('/sertifikat/investasipanjang/{id}', [EditController::class, 'empat']);
	Route::get('/sertifikat/aktivatetap/{id}', [EditController::class, 'lima']);
	Route::get('/sertifikat/aktivatdkberwujud/{id}', [EditController::class, 'enam']);
	Route::get('/sertifikat/aktivalain/{id}', [EditController::class, 'tujuh']);
	Route::get('/sertifikat/hutangjangkapendek/{id}', [EditController::class, 'delapan']);
	Route::get('/sertifikat/hutangjangkapanjang/{id}', [EditController::class, 'sembilan']);
	Route::get('/sertifikat/ekuitas/{id}', [EditController::class, 'sepuluh']);
	Route::get('/sertifikat/partisipasianggota/{id}', [EditController::class, 'sebelas']);
	Route::get('/sertifikat/pendaptannonanggota/{id}', [EditController::class, 'duabelas']);
	Route::get('/sertifikat/bebananggota/{id}', [EditController::class, 'tigabelas']);
	Route::get('/sertifikat/bebannonanggota/{id}', [EditController::class, 'empatbelas']);
	Route::get('/sertifikat/bebanusaha/{id}', [EditController::class, 'limabelas']);
	Route::get('/sertifikat/bebanperkoperasian/{id}', [EditController::class, 'enambelas']);
	Route::get('/sertifikat/pendapatanlain/{id}', [EditController::class, 'tujuhbelas']);
	Route::get('/sertifikat/biayalain/{id}', [EditController::class, 'delapanbelas']);
	Route::get('/sertifikat/pajakpenghasilan/{id}', [EditController::class, 'sembilanbelas']);
	Route::get('/sertifikat/pembiayaanbermasalah/{id}', [EditController::class, 'duapuluh']);
	Route::get('/sertifikat/agunan/{id}', [EditController::class, 'duasatu']);

	//Update
	Route::post('/edit/sertifikat/profilresiko/{id}', [EditController::class, 'inputdua']);
    Route::post('/edit/sertifikat/tatakelola/{id}', [EditController::class, 'inputsatu']);
    Route::post('/edit/sertifikat/aktivalancar/', [EditController::class, 'inputtiga']);
    Route::post('/edit/sertifikat/investasipanjang/', [EditController::class, 'inputempat']);
    Route::post('/edit/sertifikat/aktivatetap/', [EditController::class, 'inputlima']);
    Route::post('/edit/sertifikat/aktivatdkberwujud/', [EditController::class, 'inputenam']);
    Route::post('/edit/sertifikat/aktivalain/', [EditController::class, 'inputtujuh']);
    Route::post('/edit/sertifikat/hutangjangkapendek/', [EditController::class, 'inputdelapan']);
    Route::post('/edit/sertifikat/hutangjangkapanjang/', [EditController::class, 'inputsembilan']);
    Route::post('/edit/sertifikat/ekuitas/', [EditController::class, 'inputsepuluh']);
    Route::post('/edit/sertifikat/partisipasianggota/', [EditController::class, 'inputsebelas']);
    Route::post('/edit/sertifikat/pendaptannonanggota/', [EditController::class, 'inputduabelas']);
    Route::post('/edit/sertifikat/bebananggota/', [EditController::class, 'inputtigabelas']);
    Route::post('/edit/sertifikat/bebannonanggota/', [EditController::class, 'inputempatbelas']);
    Route::post('/edit/sertifikat/bebanusaha/', [EditController::class, 'inputlimabelas']);
    Route::post('/edit/sertifikat/bebanperkoperasian/', [EditController::class, 'inputenambelas']);
    Route::post('/edit/sertifikat/pendapatanlain/', [EditController::class, 'inputtujuhbelas']);
    Route::post('/edit/sertifikat/biayalain/', [EditController::class, 'inputdelapanbelas']);
    Route::post('/edit/sertifikat/pajakpenghasilan/', [EditController::class, 'inputsembilanbelas']);
    Route::post('/edit/sertifikat/pembiayaanbermasalah/', [EditController::class, 'inputduapuluh']);
    Route::post('/edit/sertifikat/agunan/', [EditController::class, 'inputduasatu']);

    //View sertifikat
    Route::get('/sertifikat/{id}', function () {
		return view('sertifikat.sertifikat');
	});
    //Input
	Route::get('/input/jenis-koperasi', function () {
		return view('input.jenis');
	});
    Route::get('/input/sertifikat/tatakelola', function () {
		return view('input.stepsatu');
	});
    Route::get('/input/sertifikat/profilresiko', function () {
		return view('input.stepdua');
	});
    Route::get('/input/sertifikat/aktivalancar', function () {
		return view('input.steptiga');
	});
    Route::get('/input/sertifikat/investasipanjang', function () {
		return view('input.stepempat');
	});
    Route::get('/input/sertifikat/aktivatetap', function () {
		return view('input.steplima');
	});
    Route::get('/input/sertifikat/aktivatdkberwujud', function () {
		return view('input.stepenam');
	});
    Route::get('/input/sertifikat/aktivalain', function () {
		return view('input.steptujuh');
	});
    Route::get('/input/sertifikat/hutangjangkapendek', function () {
		return view('input.stepdelapan');
	});
    Route::get('/input/sertifikat/hutangjangkapanjang', function () {
		return view('input.stepsembilan');
	});
    Route::get('/input/sertifikat/ekuitas', function () {
		return view('input.stepsepuluh');
	});
    Route::get('/input/sertifikat/partisipasianggota', function () {
		return view('input.stepsebelas');
	});
    Route::get('/input/sertifikat/pendaptannonanggota', function () {
		return view('input.stepduabelas');
	});
    Route::get('/input/sertifikat/bebananggota', function () {
		return view('input.steptigabelas');
	});
    Route::get('/input/sertifikat/bebannonanggota', function () {
		return view('input.stepempatbelas');
	});
    Route::get('/input/sertifikat/bebanusaha', function () {
		return view('input.steplimabelas');
	});
    Route::get('/input/sertifikat/bebanperkoperasian', function () {
		return view('input.stepenambelas');
	});
    Route::get('/input/sertifikat/pendapatanlain', function () {
		return view('input.steptujuhbelas');
	});
    Route::get('/input/sertifikat/biayalain', function () {
		return view('input.stepdelapanbelas');
	});
    Route::get('/input/sertifikat/pajakpenghasilan', function () {
		return view('input.stepsembilanbelas');
	});
    Route::get('/input/sertifikat/pembiayaanbermasalah', function () {
		return view('input.stepduapuluh');
	});
    Route::get('/input/sertifikat/agunan', function () {
		return view('input.stepduasatu');
	});

	//ksp-input
	Route::get('/ksp-input/sertifikat/tatakelola', function () {
		return view('ksp-input.stepsatu');
	});
    Route::get('/ksp-input/sertifikat/profilresiko', function () {
		return view('ksp-input.stepdua');
	});
    Route::get('/ksp-input/sertifikat/aktivalancar', function () {
		return view('ksp-input.steptiga');
	});
    Route::get('/ksp-input/sertifikat/investasipanjang', function () {
		return view('ksp-input.stepempat');
	});
    Route::get('/ksp-input/sertifikat/aktivatetap', function () {
		return view('ksp-input.steplima');
	});
    Route::get('/ksp-input/sertifikat/aktivatdkberwujud', function () {
		return view('ksp-input.stepenam');
	});
    Route::get('/ksp-input/sertifikat/aktivalain', function () {
		return view('ksp-input.steptujuh');
	});
    Route::get('/ksp-input/sertifikat/hutangjangkapendek', function () {
		return view('ksp-input.stepdelapan');
	});
    Route::get('/ksp-input/sertifikat/hutangjangkapanjang', function () {
		return view('ksp-input.stepsembilan');
	});
    Route::get('/ksp-input/sertifikat/ekuitas', function () {
		return view('ksp-input.stepsepuluh');
	});
    Route::get('/ksp-input/sertifikat/partisipasianggota', function () {
		return view('ksp-input.stepsebelas');
	});
    Route::get('/ksp-input/sertifikat/pendaptannonanggota', function () {
		return view('ksp-input.stepduabelas');
	});
    Route::get('/ksp-input/sertifikat/bebananggota', function () {
		return view('ksp-input.steptigabelas');
	});
    Route::get('/ksp-input/sertifikat/bebannonanggota', function () {
		return view('ksp-input.stepempatbelas');
	});
    Route::get('/ksp-input/sertifikat/bebanusaha', function () {
		return view('ksp-input.steplimabelas');
	});
    Route::get('/ksp-input/sertifikat/bebanperkoperasian', function () {
		return view('ksp-input.stepenambelas');
	});
    Route::get('/ksp-input/sertifikat/pendapatanlain', function () {
		return view('ksp-input.steptujuhbelas');
	});
    Route::get('/ksp-input/sertifikat/biayalain', function () {
		return view('ksp-input.stepdelapanbelas');
	});
    Route::get('/ksp-input/sertifikat/pajakpenghasilan', function () {
		return view('ksp-input.stepsembilanbelas');
	});
    Route::get('/ksp-input/sertifikat/pembiayaanbermasalah', function () {
		return view('ksp-input.stepduapuluh');
	});
    Route::get('/ksp-input/sertifikat/agunan', function () {
		return view('ksp-input.stepduasatu');
	});

    Route::post('/input/sertifikat/profilresiko', [InputController::class, 'inputdua']);
    Route::post('/input/sertifikat/tatakelola', [InputController::class, 'inputsatu']);
    Route::post('/input/sertifikat/aktivalancar', [InputController::class, 'inputtiga']);
    Route::post('/input/sertifikat/investasipanjang', [InputController::class, 'inputempat']);
    Route::post('/input/sertifikat/aktivatetap', [InputController::class, 'inputlima']);
    Route::post('/input/sertifikat/aktivatdkberwujud', [InputController::class, 'inputenam']);
    Route::post('/input/sertifikat/aktivalain', [InputController::class, 'inputtujuh']);
    Route::post('/input/sertifikat/hutangjangkapendek', [InputController::class, 'inputdelapan']);
    Route::post('/input/sertifikat/hutangjangkapanjang', [InputController::class, 'inputsembilan']);
    Route::post('/input/sertifikat/ekuitas', [InputController::class, 'inputsepuluh']);
    Route::post('/input/sertifikat/partisipasianggota', [InputController::class, 'inputsebelas']);
    Route::post('/input/sertifikat/pendaptannonanggota', [InputController::class, 'inputduabelas']);
    Route::post('/input/sertifikat/bebananggota', [InputController::class, 'inputtigabelas']);
    Route::post('/input/sertifikat/bebannonanggota', [InputController::class, 'inputempatbelas']);
    Route::post('/input/sertifikat/bebanusaha', [InputController::class, 'inputlimabelas']);
    Route::post('/input/sertifikat/bebanperkoperasian', [InputController::class, 'inputenambelas']);
    Route::post('/input/sertifikat/pendapatanlain', [InputController::class, 'inputtujuhbelas']);
    Route::post('/input/sertifikat/biayalain', [InputController::class, 'inputdelapanbelas']);
    Route::post('/input/sertifikat/pajakpenghasilan', [InputController::class, 'inputsembilanbelas']);
    Route::post('/input/sertifikat/pembiayaanbermasalah', [InputController::class, 'inputduapuluh']);
    Route::post('/input/sertifikat/agunan', [InputController::class, 'inputduasatu']);

    Route::get('/input/pilih-koperasi', [InputController::class, 'index']);
    Route::get('/input/search', [InputController::class, 'search']);
    Route::get('/input/koperasi/{id}', [InputController::class, 'pilih']);

    // Themekit demo pages
	Route::get('/calendar', function () { return view('pages.calendar'); });
	Route::get('/charts-amcharts', function () { return view('pages.charts-amcharts'); });
	Route::get('/charts-chartist', function () { return view('pages.charts-chartist'); });
	Route::get('/charts-flot', function () { return view('pages.charts-flot'); });
	Route::get('/charts-knob', function () { return view('pages.charts-knob'); });
	Route::get('/forgot-password', function () { return view('pages.forgot-password'); });
	Route::get('/form-addon', function () { return view('pages.form-addon'); });
	Route::get('/form-advance', function () { return view('pages.form-advance'); });
	Route::get('/form-components', function () { return view('pages.form-components'); });
	Route::get('/form-picker', function () { return view('pages.form-picker'); });
	Route::get('/invoice', function () { return view('pages.invoice'); });
	Route::get('/layout-edit-item', function () { return view('pages.layout-edit-item'); });
	Route::get('/layouts', function () { return view('pages.layouts'); });

	Route::get('/navbar', function () { return view('pages.navbar'); });
	Route::get('/profile', function () { return view('pages.profile'); });
	Route::get('/project', function () { return view('pages.project'); });
	Route::get('/view', function () { return view('pages.view'); });

	Route::get('/table-bootstrap', function () { return view('pages.table-bootstrap'); });
	Route::get('/table-datatable', function () { return view('pages.table-datatable'); });
	Route::get('/taskboard', function () { return view('pages.taskboard'); });
	Route::get('/widget-chart', function () { return view('pages.widget-chart'); });
	Route::get('/widget-data', function () { return view('pages.widget-data'); });
	Route::get('/widget-statistic', function () { return view('pages.widget-statistic'); });
	Route::get('/widgets', function () { return view('pages.widgets'); });

	// themekit ui pages
	Route::get('/alerts', function () { return view('pages.ui.alerts'); });
	Route::get('/badges', function () { return view('pages.ui.badges'); });
	Route::get('/buttons', function () { return view('pages.ui.buttons'); });
	Route::get('/cards', function () { return view('pages.ui.cards'); });
	Route::get('/carousel', function () { return view('pages.ui.carousel'); });
	Route::get('/icons', function () { return view('pages.ui.icons'); });
	Route::get('/modals', function () { return view('pages.ui.modals'); });
	Route::get('/navigation', function () { return view('pages.ui.navigation'); });
	Route::get('/notifications', function () { return view('pages.ui.notifications'); });
	Route::get('/range-slider', function () { return view('pages.ui.range-slider'); });
	Route::get('/rating', function () { return view('pages.ui.rating'); });
	Route::get('/session-timeout', function () { return view('pages.ui.session-timeout'); });
	Route::get('/pricing', function () { return view('pages.pricing'); });


	// new inventory routes
	Route::get('/inventory', function () { return view('inventory.dashboard'); });
	Route::get('/pos', function () { return view('inventory.pos'); });
	Route::get('/products', function () { return view('inventory.product.list'); });
	Route::get('/products/create', function () { return view('inventory.product.create'); });
	Route::get('/categories', function () { return view('inventory.category.index'); });
	Route::get('/sales', function () { return view('inventory.sale.list'); });
	Route::get('/sales/create', function () { return view('inventory.sale.create'); });
	Route::get('/purchases', function () { return view('inventory.purchase.list'); });
	Route::get('/purchases/create', function () { return view('inventory.purchase.create'); });
	Route::get('/customers', function () { return view('inventory.people.customers'); });
	Route::get('/suppliers', function () { return view('inventory.people.suppliers'); });

});


Route::get('/register', function () { return view('pages.register'); });
Route::get('/login-1', function () { return view('pages.login'); });
