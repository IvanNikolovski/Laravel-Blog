<?php


//App::singleton('App\Billing\Stripe', function ()
//{
	//return new \App\Billing\Stripe(config('services.stripe.secret'));
//});

//$stripe = resolve('App\Billing\Stripe');




Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

// If you are not logged in it says you have to

Route::get('/posts/create', function() {
return auth()->check()
? View::make('posts.create')
: View::make('sessions.create');
});