<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

// Route::get('/testing-api', function () {
//     return ['message' => 'hello'];
// });


// Route::get('/posts', function(){
//     $post = Post::create([
//         'title' => 'my first post', 
//         'slug' => 'my-first-post'
//         ]);
//         return $post;
// });

// Route::get('/posts', 'PostController@index');
// Route::post('/posts', 'PostController@store');
// Route::put('/posts', 'PostController@update');
// Route::delete('/posts', 'PostController@destroy');


// we can prefix the route so if we wanted multiple api versions we can add v1,v2,v3 to the route
Route::prefix('v1')->group(function(){
    Route::resource('posts', PostController::class);

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
