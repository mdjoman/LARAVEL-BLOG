<?php
use App\Models\Category;
use GuzzleHttp\Middleware;
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
    return view('E-info.home');
})->name('dashboard');
;

Route::get('/blog', function () {
    return view('E-info.category-post');
});
Route::get('/post-details', function () {
    return view('E-info.post-details');
});
Route::get('/contuct', function () {
    return view('E-info.contuct-us');
});

/*   ========== category route ============*/

Route::get('/add-categories',[
   'uses'   => 'App\Http\Controllers\categoriescontroller@addcategory',
   'as'     => 'add-categories',
   'middleware' => ['auth:sanctum','verified']

]);

Route::get('/manage-categories',[
    'uses'   => 'App\Http\Controllers\categoriescontroller@managecategory',
    'as'     => 'manage-categories',
    'middleware' => ['auth:sanctum','verified']
 
 ]);

 
Route::get('/edit-category/{id}',[

    'uses'    =>  'App\Http\Controllers\categoriescontroller@editcategory',
    'as'      =>   'edit-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/delete-category/{id}',[

    'uses'    =>  'App\Http\Controllers\categoriescontroller@deletecategory',
    'as'      =>   'delete-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/cerate-categories',[

    'uses'    =>  'App\Http\Controllers\categoriescontroller@createcategory',
    'as'      =>   'cerate-categories',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/update-category',[

    'uses'    =>  'App\Http\Controllers\categoriescontroller@updatcategory',
    'as'      =>   'update-category',
    'middleware'  => ['auth:sanctum','verified']
]);


/*   ========== tag route ============*/

Route::resource('tag', 'App\Http\Controllers\TagController')->middleware('auth:sanctum','verified');

/*   ========== post route ============*/

Route::resource('post', 'App\Http\Controllers\Postcontroller')->middleware('auth:sanctum','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Admin.index');
})->name('dashboard');
