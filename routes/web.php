<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tender;
use App\Models\User;
use App\Models\Contacts;
use App\Models\Country;

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
    $tenders = Tender::all();
    $countries = Country::all();
    return view('index', compact('tenders', 'countries'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $tenders = Tender::all();
    $tender = Tender::find(1);
    $comments = $tender->comments;
 
    return view('dashboard', compact('tenders', 'comments'));
})->name('dashboard');

Route::resource('/tender', 'TenderController');

Route::resource('/comment', CommentController::class);


Route::get('/tenders',function(){  
    
    return User::find(1)->tender;    
    }  
);  