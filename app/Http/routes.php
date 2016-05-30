<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//http://code.tutsplus.com/tutorials/using-laravel-5s-authentication-facade--cms-23461

/*
|--------------------------------------------------------------------------
| Modifying the Default Authentication Routes
|--------------------------------------------------------------------------
|
|
*/
// Example 1
// login url http://www.example.com/account/login
// logout url http://www.example.com/account/logout
// registration url http://www.example.com/account/register
/*Route::controllers([
    'account' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

// Example 2
// login url http://www.example.com/login
// logout url http://www.example.com/logout
// registration url http://www.example.com/register
/*Route::controllers([
    '' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/

// Example 3
// redefine all routes
/*Route::get('example/register', 'Auth\AuthController@getRegister');
Route::post('example/register', 'Auth\AuthController@postRegister');
Route::get('example/login', 'Auth\AuthController@getLogin');
Route::post('example/login', 'Auth\AuthController@postLogin');
Route::get('example/logout', 'Auth\AuthController@getLogout');
Route::get('example/email', 'Auth\PasswordController@getEmail');
Route::post('example/email', 'Auth\PasswordController@postEmail');
Route::get('example/reset/{code}', 'Auth\PasswordController@getReset');
Route::post('example/reset', 'Auth\PasswordController@postReset');*/



/*
|--------------------------------------------------------------------------
| Securing Your Routes
|--------------------------------------------------------------------------
|
| Here are a few examples of how to use it to protect your routes
|
*/
// route closure
/*Route::get('<your-route-uri>', ['middleware' => 'auth', function()
{
    // if user is not logged in
    // he/she will be redirected to the login page
    // and this code will not be executed
}]);

// controller action
Route::get('<your-route-uri>', ['middleware' => 'auth', 'uses' => '<your-controller>@<your-action>']);

// within a controller
class YourController extends Controller {

    public function __construct()
    {
        $this->middleware('<your-middleware-name>');

        $this->middleware('<another-middleware>', ['only' => ['<some-action-name>']]);

        $this->middleware('<more-middleware>', ['except' => ['<another-action-name>']]);
    }

}*/