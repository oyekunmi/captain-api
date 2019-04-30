<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/api/auth', function(Request $request){
    $user = DB::table('users')->where('token', $request->input('token'))->first();
    if(empty($user)){
        return response()->json(['status' => 'fail'],401);
    }
    return "Bearer " + $user->token;
});

$router->group(['prefix' => 'api/', 'middleware' => 'auth'], function () use ($router) {


    $router->get('user', function(Request $request){
        return Auth::user();
    });
    
    $router->get('users', function(Request $request){
        $users = DB::table('users')->get();
        return $users;
    });

});


$router->get("/vessels", ['middleware' => 'auth', function(Request $request){
    return DB::table('vessels')->get();
}]);

$router->get("/vessels/{user_id}", ['middleware' => 'auth', function(Request $request, $user_id){
    return DB::table('vessels')->where('user_id', $user_id)->get();
}]);

// $router->get('/vessels/{id}', ['middleware' => 'auth', function(Request $request, $id){
//     return DB::table('vessels')->find($id);
// }]);

$router->get('/certificates', ['middleware' => 'auth', function(Request $request){
    return DB::table('certificates')->get();
}]);

$router->get('/certificates/{id}', ['middleware' => 'auth', function(Request $id){
    return DB::table('certificates')->find($id);
}]);