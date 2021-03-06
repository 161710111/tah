<?php

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

Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'FrontendController@home')->name('homes');
Route::get('profile', 'FrontendController@index1')->name('profile');
Route::get('umroh', 'FrontendController@index2')->name('umroh');
Route::get('wisata', 'FrontendController@index4')->name('wisata');
Route::get('detailwisata/{wisata}', 'FrontendController@nampil')->name('detailwisata');
Route::get('testimoni', 'FrontendController@index5')->name('testimoni');
Route::get('galeri', 'FrontendController@index6')->name('galeri');
Route::get('sukses', 'FrontendController@index22')->name('sukses.index');

Route::get('daftar_umroh/create', 'FrontendController@index7')->name('daftar_umroh');
Route::post('daftar_umroh', 'FrontendController@store')->name('daftar_umroh.store');

Route::get('daftar_haji/create', 'FrontendController@index23')->name('daftar_haji');
Route::post('daftar_haji', 'FrontendController@storeHaji')->name('daftar_haji.storeHaji');

Route::get('daftar_tabungan/create', 'FrontendController@index24')->name('daftar_tabungan');
Route::post('daftar_tabungan', 'FrontendController@storeTabungan')->name('daftar_tabungan.storeTabungan');

Route::get('berita', 'FrontendController@berita')->name('berita');
Route::get('detailberita/{berita}', 'FrontendController@show')->name('detailberita');
Route::get('faqs', 'FrontendController@index9')->name('faqs');
Route::get('kontak', 'FrontendController@index10')->name('kontak');
Route::get('haji', 'FrontendController@index11')->name('haji');
Route::get('jadwal_keberangkatan', 'FrontendController@index14')->name('jadwal_keberangkatan');
Route::get('promo', 'FrontendController@index15')->name('promo');
Route::get('tabungan', 'FrontendController@index16')->name('tabungan');
Route::get('jadwal_manasik', 'FrontendController@index17')->name('jadwal_manasik');
Route::get('menu_umroh', 'FrontendController@index19')->name('menu_umroh');
Route::get('menu_haji', 'FrontendController@index20')->name('menu_haji');
Route::get('menu_wisata', 'FrontendController@index21')->name('menu_wisata');
Route::get('umroh/{kategori}', 'FrontendController@umrahkategori');
Route::get('haji/{kategoria}', 'FrontendController@hajikategori');\
Route::get('wisata/{kategoriw}', 'FrontendController@wisatakategori');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','\App\Http\Controller\Auth\LoginController@logout');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
	Route::resource('berita','BeritaController');
	Route::resource('faqs','FaqsController');
	Route::resource('wisata','WisataController');
	Route::resource('lokasi','LokasiController');
	Route::resource('kategoriw','KategoriwController');
	Route::resource('haji','HajiController');
	Route::resource('jadwalumroh','JadwalumrohController');
	Route::resource('jadwalhaji','JadwalhajiController');
	Route::resource('kategoria','KategoriaController');
	Route::resource('tabungan','TabunganController');
	Route::resource('umroh','UmrohController');
	Route::resource('kategorie','KategorieController');
	// Route::resource('umplus','UmplusController');
	// Route::resource('umpbyreq','UmpbyreqController');
	Route::resource('kontak','KontakController');
	Route::resource('promo','PromoController');
	Route::resource('daftar','DaftarController');
	Route::resource('daftarhaji','DaftarhajiController');
	Route::resource('daftartabungan','DaftartabunganController');
	Route::resource('kategori','KategoriController');
	Route::resource('testimoni','TestimoniController');
	Route::resource('galerihome','GalerihomeController');
	Route::resource('galerihaji','GalerihajiController');
	Route::resource('galmanhaji','GalmanhajiController');
	Route::resource('galmanumroh','GalmanumrohController');
	Route::resource('galumplus','GalumplusController');
	Route::resource('galumreguler','GalumregulerController');
	Route::resource('galeriwisata','GaleriwisataController');
	Route::resource('youtube','YoutubeController');
	Route::resource('kategorig','KategorigController');
	Route::resource('galeri','GaleriController');
});