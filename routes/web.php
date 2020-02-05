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
Route::get('/', function () {
    return view('welcome');
    });


//Route basic
Route::get('/about', function () {
    return '<h1>Hallo</h1>'.
    'selamat datanng di web app saya<br>'.
    'Laravel, emang keren. ';
});

Route::get('profil',function()
{
    return view('biodata');
});
Route::get('profil2',function()
{
    return view('biodata2');
});
Route::get('profil3',function()
{
    return view('biodata3');
});
Route::get('profil4',function()
{
    return view('biodata4');
});
Route::get('profil5',function()
{
    return view('biodata5');
});
//Route parameter
Route::get('pesan/{makan}',function($mkn)
{
    return "makanan yang saya pesan adalah " .$mkn;
});
Route::get('latihan/{makan}/{minum}/{bayar}',function($a,$b,$c)
{
    return "saya pesan ".$a.'<br>'.
     "saya  minnum ".$b.'<br>'.
     "total harga Rp. ".$c;
});

Route::get('pesanan/{makan?}/{minum?}/{harga?}',function($mkn= null,$a= null,$harga = null)
{


    if ($mkn) {
        echo "anda pesan " . $mkn;
    }
    if ($a) {
        echo " & " . $a;
    }
    if ($harga) {
        echo " harganya " . $harga;
    }
    if (!$mkn && !$a && !$harga) {
        return "anda tidak memesan";
    }



});


Route::get('/testmodel', function() {
$query = App\Post::all();
return $query;
});

Route::get('/testmodel1', function() {
$query = App\Post::find(2);
return $query;
});

Route::get('/testmodel2', function() {
$query = App\Post::where('title','like','%Ciri Keluarga Sakinah%')->get();
return $query;
});

Route::get ('/testmodel3', function() {
    $post = App\Post::find(2);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/testmodel4', function() {
    $post = App\Post::find(1);
    $post->delete();
});

Route::get('/testmodel5', function() {
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

Route::get('/testmodel6', function() {
    $query = App\Penggajian::all();
    return $query;
});

Route::get('/testmodel7-1', function() {
    $query = App\Penggajian::where('alamat', 'rancamanyar')->get();
    return $query;
});

Route::get('/testmodel7-2', function() {
    $query = App\Penggajian::select('id','nama','agama')->
    where('alamat','rancamanyar')
    ->get();
    return $query;
});

Route::get('/testmodel7/{id}', function($id) {
    $query = App\Penggajian::find($id);
    return $query;
});

Route::get('/testmodel8', function() {
    $gaji = new App\Penggajian;
    $gaji->nama = "irsyal";
    $gaji->jabatan = "OB";
    $gaji->jk = "Laki Laki";
    $gaji->alamat = "TKI";
    $gaji->agama = "Hindu";
    $gaji->total_gaji = "3juta";
    $gaji->save();
    return $gaji;
});

Route::get('/hay', 'MyController@hay');
Route::get('/hay1', 'MyController@nama');
Route::get('/hay2', 'MyController@saya');
Route::get('/hay3', 'MyController@adalah');
Route::get('/hay4', 'MyController@muhammad');
Route::get('/hay5', 'MyController@alghani');
Route::get('/hay6', 'MyController@halo');
Route::get('/hay7', 'MyController@aku');
Route::get('/hay8', 'MyController@adalah1');
Route::get('/beli','MyController@beli');
//book crud

Route::get('book','BookController@index');
Route::get('book-create/{judul}','BookController@create');
Route::get('book/{id}','BookController@show');
Route::get('book-edit/{judul}/{id}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');
Route::get('tampil','BookController@tigadata');
Route::get('tampil2','BookController@menghitung');

//CRUD ARTIKEL

// Route::get('arti','ArtikelController@index');
// Route::get('arti/create','ArtikelController@create');
// Route::get('arti','ArtikelController@store');
// Route::get('arti/{id}','ArtikelController@show');
// Route::get('arti/{id}/edit','ArtikelController@edit');
// Route::PUT('arti/{id}','ArtikelController@update');
// Route::DELETE('arti/{id}','ArtikelController@destroy');

Route::resource('arti','ArtikelController');

//Passing Data
Route::get('passing', 'PracticeController@pass');
Route::get('passing1', 'PracticeController@pass1');
Route::get('passing2', 'PracticeController@pass2');
Route::get('passing3', 'BarangController@index');

//Book Route
Route::resource('buku' , 'BookController');
Route::resource('barang' , 'BarangController');

//blade
Route::get('home', function ()
{
    return view('home');
});

Route::get('about', function ()
{
    return view('about');
});

Route::get('contact', function ()
{
    return view('contact');
});

