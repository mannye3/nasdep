<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@about')->name('about');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('pricing', 'PublicController@pricing')->name('pricing');








Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
// });




// INVESTOR ROUTE
Route::prefix('investor')->group(function(){
    Route::get('dashboard', 'InvestorController@dashboard')->name('investorDashboard');
    Route::get('analysts', 'InvestorController@analysts')->name('analysts');
    Route::get('investors', 'InvestorController@investors')->name('investors');
    Route::get('incubators', 'InvestorController@incubators')->name('incubators');
    Route::get('profile', 'InvestorController@profile')->name('profile');
    Route::post('profile', 'InvestorController@profileEdit')->name('investorProfileEdit');
    Route::post('profile/password', 'InvestorController@profilePassword')->name('investorProfilePassword');
    Route::post('profile/picture', 'InvestorController@profilePicture')->name('investorProfilePicture');




});



// ENTERPRISE
Route::prefix('investor')->group(function(){
    Route::get('/dashboard', 'InvestorController@dashboard')->name('investorDashboard');
});



Route::namespace('Auth')->prefix('admin')->group(function(){
    Route::get('/loginform', 'AdminLoginController@showLoginForm')->name('admin.loginform');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
});



Route::namespace("Admin")->prefix('admin')->group(function(){
	Route::get('/', 'AdminController@dashboard')->name('admin.home');

    // Particpants//
    Route::get('/participants', 'AdminController@participants')->name('admin.participants');
    Route::get('/participant', 'AdminController@participant')->name('admin.participant');
    Route::get('participant/{id}/view', 'AdminController@viewUser')->name('adminViewUser');
    Route::post('participant/{id}/edit', 'AdminController@editUserPost')->name('adminEditUserPost');
    Route::post('participant/{id}/status', 'AdminController@statusUserPost')->name('adminStatusUserPost');
    Route::post('participant/{id}/delete', 'AdminController@deleteUser')->name('adminDeleteUser');



     // Incubators//
     Route::get('/incubators', 'AdminController@incubators')->name('admin.incubators');
     Route::get('incubator/{id}/view', 'AdminController@viewIncubator')->name('adminViewIncubator');
     Route::post('incubator/{id}/edit', 'AdminController@editCompany')->name('adminEditCompany');



      // Investors//
      Route::get('/investors', 'AdminController@investors')->name('admin.investors');
      Route::get('investor/{id}/view', 'AdminController@viewInvestor')->name('adminViewInvestor');
      Route::post('investor/{id}/status', 'AdminController@changeInvestorStatus')->name('statusInvetors');
      Route::post('investor/{id}/delete', 'AdminController@deleteInvestor')->name('adminDeleteInvestor');






      // Analysts//
      Route::get('/analysts', 'AdminController@analysts')->name('admin.analysts');
      Route::get('analyst/{id}/view', 'AdminController@viewAnalyst')->name('adminViewAnalyst');
      Route::post('analyst/{id}/status', 'AdminController@changeAnalystStatus')->name('statusAnalysts');
      Route::post('analyst/{id}/delete', 'AdminController@deleteAnalyst')->name('adminDeleteAnalyst');




      // Sectors//
      Route::get('/sectors', 'AdminController@sectors')->name('admin.sectors');
      Route::post('sector/{id}/edit', 'AdminController@editSector')->name('editsector');
      Route::post('sector/{id}/delete', 'AdminController@deleteSector')->name('deletesector');






      // Industries//
      Route::get('/industries', 'AdminController@industries')->name('admin.industries');
      Route::post('industry/{id}/edit', 'AdminController@editIndustry')->name('editindustry');
      Route::post('industry/{id}/delete', 'AdminController@deleteIndustry')->name('deleteindustry');



       // Investors//
       Route::get('/pools', 'AdminController@pools')->name('admin.pools');
       Route::get('pool/{id}/view', 'AdminController@viewPool')->name('adminViewPool');
       Route::post('pool/{id}/delete', 'AdminController@deletePool')->name('adminDeletePool');



});






// Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
// Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
// Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

// Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
// 	// Admin Dashboard
// 	Route::get('dashboard','AdminController@dashboard')->name('dashboard');
// });


// Route::prefix('investor')->group(function(){
//     Route::get('dashboard', 'investorController@dashboard')->name('investorDashboard');
//     // Route::get('comments', 'AuthorController@comments')->name('authorComments');
//     // Route::get('posts/new', 'AuthorController@newPost')->name('newPost');
//     // Route::post('posts/new', 'AuthorController@createPost')->name('createPost');
//     // Route:.:get('post/{id}/edit', 'AuthorController@postEdit')->name('postEdit');
//     // Route::post('post/{id}/edit', 'AuthorController@postEditPost')->name('postEditPost');
//     // Route::get('post/{id}/delete', 'AuthorController@deletePost')->name('deletePost');
//     Route::get('posts', 'AuthorController@posts')->name('authorPosts');
//     });
