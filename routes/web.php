<?php



Route::get('api/users', function(){
  return Datatables::eloquent(App\User::query())->make(true);
});

Route::get('activate/{token}','ActivationTokenController@activate')->name('activation');

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('galeria/{post}', 'PostsController@show')->name('posts.show');
Route::get('/blog', ['as' => '/blog', 'uses'=> 'HomeController@blog']);
Route::get('/home', ['as' => 'home', 'uses'=> 'HomeController@home']);

Route::get('/mensajes', ['as' => 'mensajes', 'uses'=> 'MessagesController@index']);
Route::post('/mensajes', 'MessagesController@store')->name('messages.store');
Route::get('mensajes/{id}', 'MessagesController@show')->name('messages.show');

Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');
Route::patch('notificaciones/{id}','NotificationsController@read')->name('notifications.read');
Route::delete('notificaciones/{id}','NotificationsController@destroy')->name('notifications.destroy');

Route::resource('usuarios', 'UsersController');
// Route::get('registrar', 'UsersController@create')->name('usuarios.create');

Route::get('password', ['as' => 'password', 'uses'=> 'UsersController@password']);
Route::post('updatepassword', 'UsersController@updatepassword')->name('updatepassword');

route::get('/index', 'GaleriasController@galeria1')->name('index');






// -------------------------------
// -------------------------------
Route::get('galeria/{post}', 'PostsController@show')->name('posts.show');
Route::get('categorias/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');

Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'auth'],
function(){

  Route::get('posts', 'PostsController@index')->name('admin.posts.index');
  Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
  Route::post('posts', 'PostsController@store')->name('admin.posts.store');
  Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
  Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');

  Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
  Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');
  // rutas de administracion
});
