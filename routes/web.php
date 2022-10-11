<?php

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
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


Route::get('/', function(){


    // $comments = Comment::all()->sortBy(null,null,true);

    // return view('layout',compact('comments'));
    return view('project.overview');
});

Route::get('/projects',function(){
    return view('layouts.projects_layout');
});
Route::view('/projects/new','layouts.createproject_layout');
Route::view('/about','project.about');
Route::view('/contact','project.contact');
Route::view('/community','project.community');

Route::get('/projects/{id}',function(){

    return view('layouts.project_layout');
});
Route::view('/login','auth.login');
Route::view('/signup','auth.signup');

Route::post('/login',function(Request $request){


    $validatedUser = $request->validate([
        'name' => 'required|min:5',
        'password' => 'required|min:5'
    ]);

    session()->put('user',$request['name']);

    return redirect('/');
});
Route::post('/signup',function(Request $request){


    $validatedUser = $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email',
        'password' => 'required|min:5|required_with:confirm_password|same:confirm_password',
        'confirm_password' =>'required'
    ]);

    session()->put('user',$request['name']);
    return redirect('/');

});
Route::get('/signout',function(){
    session()->remove('user');
    return redirect('/');
});