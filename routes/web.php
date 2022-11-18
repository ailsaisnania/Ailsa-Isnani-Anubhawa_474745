<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;



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
/*
Route::get('/ailsa', function () { //ini fungsinya buat bikin link
    return ('<h1>welcome</h1>'); //view disini berfungsi untuk merujuk ke folder view. Jadi kalo link nya di klik, maka akan merujuk ke file
                            //yang ada di folder resource < view. contohnya dari baris tersebut adalah file 'welcome'. Kalo diklik berarti nanti akan menampilkan
                            //wecome.php yang ada di folder view.
                            //bisa juga langsung diisi sama teks nya. tapi gausah pake view jadi langsung return ('<h1>welcome</h1>'). 
}); */



/*
Route::get( '/halo/{nama}' , function($nama) { //nama disini fungsinya buat jadi parameter yang memberi value ke variabel $nama.
    return '<h1>Halo, ' . $nama . '</h1>'; //nantinya, variabel $nama dipanggil disini.
   });*/



   /*Route::get( '/halo/{nama?}' , function($nama = //kalo parameternya kosong, kasih tanda tanya. tanda tanya ini fungsinya ngasih alternatif lain kalo parameter
                                                    //nama ga diisi
   'Unknown' ) { //tanpa nama ini fungsinya buat nnggantiin kalo namanya kosong. Jadi url nya bisa diakses cuma pake /halo
    return '<h1>Halo ' . $nama . '</h1>';
   });*/


Route::get('/ppw2', function() {
    return view('ppw2');
});

Route::get( '/halo/{nama}' , function($nama) {
    return '<h1>Halo ' . $nama . '</h1>';
   });

   Route::get( '/halo/{nama?}' , function($nama =
   'Unknown' ) {
    return '<h1>Halo ' . $nama . '</h1>';
   });


Route::get('/ppw2', function() {
    return view('ppw2', ['data' =>
   '123 sayang semuanya']);
   });





//    Route::get('/home', function() {
//     return view('home');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/education', function() {
    return view('education');
});

Route::get('/abouts/edit', function() {
    return view('edit');
});

// Route::get('/abouts/update', function() {
//     return view('');
// });
// Route::get('/edit', 'MyController@edit')->name('edit');



Route::resource('posts',
'App\Http\Controllers\PostController');


Route::resource('home',
'App\Http\Controllers\HomeController');

Route::resource('projects',
'App\Http\Controllers\ProjectController');

Route::resource('edus',
'App\Http\Controllers\EduController');

Route::resource('about',
'App\Http\Controllers\AboutController');


Route::resource('',
'App\Http\Controllers\SendEmailController');

Route::get('/', function() {
    return view('home.index');
});

Route::get('projects/hapus/{id}', [App\Http\Controllers\ProjectController::class, 'hapus']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes([
    'reset' => false,
   ]);

   Route::get('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
   
    Mail::to('ailsaisnani@gmail.com')->send(new SendEmail($data));
   
    dd("Email successfully sent.");
   });



   Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');

Auth::routes();

Route::resource('gallery', 'App\Http\Controllers\GalleryController');

// Route::get('/greet', [GreetController::class, 'greet'])->name ('greet');
// Route::get('/gallery2', [GalleryController::class, 'indexs'])-> name('indexs');
Route::get('/gallery2', 'App\Http\Controllers\GalleryController@indexs');
Route::get('/greet', [GreetController::class, 'greet'])->name('greeting');
