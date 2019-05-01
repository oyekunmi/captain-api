<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
    if ($request->header('Authorization')) {
        $key = explode(' ',$request->header('Authorization'));
        $user = User::where('token', $key[1])->first();
    
        if(!empty($user)){
            return "Bearer ".$user->token;
        }

    }
    return response()->json(['status' => 'fail'],401);
});

$router->group(['prefix' => 'api/', 'middleware' => 'auth'], function () use ($router) {
    
    $router->get('user', function(Request $request){
        return Auth::user();
    });

    $router->get('users', function(Request $request){
        $users = DB::table('users')->get();
        return $users;
    });

    $router->get('certificates/expiring', function(Request $request){
        return DB::table('certificates')->get();
    });

    $router->get('/certificates/{id}', function(Request $request, Int $id){
        $c=  DB::table('certificates')->find($id);
        return response()->json($c);
    });
    
    $router->get('certificates', function(Request $request){
        return DB::table('certificates')->get();
    });

});



// $router->get("/vessels", ['middleware' => 'auth', function(Request $request){
//     return DB::table('vessels')->get();
// }]);    

// $router->get("/vessels/{user_id}", ['middleware' => 'auth', function(Request $request, $user_id){
//     return DB::table('vessels')->where('user_id', $user_id)->get();
// }]);

// // $router->get('/vessels/{id}', ['middleware' => 'auth', function(Request $request, $id){
// //     return DB::table('vessels')->find($id);
// // }]);
