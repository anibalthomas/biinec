<?php



Route::get('api/users', function(){
  return Datatables::eloquent(App\User::query())->make(true);
});

Auth::routes();

Route::get('/', ['as' => '/', 'uses'=> 'HomeController@index']);
Route::get('/blog', ['as' => '/blog', 'uses'=> 'HomeController@blog']);
Route::get('/home', ['as' => 'home', 'uses'=> 'HomeController@home']);

Route::get('/mensajes', ['as' => 'mensajes', 'uses'=> 'MessagesController@index']);
Route::post('/mensajes', 'MessagesController@store')->name('messages.store');
Route::get('mensajes/{id}', 'MessagesController@show')->name('messages.show');

Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');
Route::patch('notificaciones/{id}','NotificationsController@read')->name('notifications.read');
Route::delete('notificaciones/{id}','NotificationsController@destroy')->name('notifications.destroy');

Route::resource('usuarios', 'UsersController');
Route::get('registrar', 'UsersController@create')->name('usuarios.create');

Route::get('password', ['as' => 'password', 'uses'=> 'UsersController@password']);
Route::post('updatepassword', 'UsersController@updatepassword')->name('updatepassword');

route::get('/galeria1', 'GaleriasController@galeria1');
route::get('/galeria2', 'GaleriasController@galeria2');
route::get('/imagen', 'HomeController@imagen');
