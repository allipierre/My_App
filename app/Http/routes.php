Route::get('/', 'PageController@index');

Route::get('about', function(){
	return view('welcome');
});