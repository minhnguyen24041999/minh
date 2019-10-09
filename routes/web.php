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
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;



Route::get('/', function () {
       return view('welcome');
});
Route::group([
     'prefix' => 'users',
	 'name' => 'users.',], function(){
	// Routes
});

Route::get('users', 'UserController@index')->name('users.index');

Route::get('posts', function() {
	$posts = factory(Post::class, 10)->make()->toArray();
	$posts = Post::all();//->toArray();
	foreach ($posts as $post){
		$post->user;
	}
	
	$posts = $posts->toArray();
    	return view('post',[
    		'posts' => $posts
    	]);  	
});

Route::get('users/create', 'UserController@create')->name('users.create');

Route::post('users/store', 'UserController@store')->name('users.store');

Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');

Route::post('users/{id}/update', 'UserController@update')->name('users.update');

Route::get('users/delete/{id}', 'UserController@delete')->name('users.delete');

Route::get('users/{id}', 'UserController@show')->name('users.show');