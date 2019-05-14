<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

$router->get('/', function () use ($router) {
    return view('web');
});

$router->post('/api/auth', function(Request $request){
    $key = null;
    if ($request->header('Authorization')) {
        $key = explode(' ',$request->header('Authorization'))[1];
    }else if($request->input('token')){
        $key = $request->input('token');
    }else{
        return response()->json([
            'errors' => ['passcode' => 'is invalid']
        ],401);
    }

    $user = User::where('token', $key)->first();
    
    if(!empty($user)){
        return "Bearer ".$user->token;
    }else{
        return response()->json([
            'errors' => ['passcode' => 'is invalid']
        ],401);
    }
    
});


$router->post('/api/v1/auth', function(Request $request){
    $key = $request->input('token');
    if($key){
        $user = User::where('token', $key)->first();
    
        if(!empty($user))
            return response()->json([
                'user'=> $user
            ]);
    }
    return response()->json([
        'errors' => ['passcode' => 'is invalid']
    ],401);

});

$router->group(['prefix' => 'api/v1/', 'middleware' => 'auth'], function () use ($router) {
    $router->get('user', function(Request $request){
        return response()->json([
            'user'=> Auth::user()
        ]);
    });
});



$router->group(['prefix' => 'api/', 'middleware' => 'auth'], function () use ($router) {
    $router->get('user', function(Request $request){ return Auth::user(); });
    $router->get('vessels/{id}/certificates/{state}/state', 'CertificateController@byVesselAndState');
    $router->get('vessels/{id}/certificates', 'CertificateController@byVessel');
    $router->get('certificates/{state}/state', 'CertificateController@state');
    $router->get('certificates/{id}', 'CertificateController@show');
    $router->get('certificates', 'CertificateController@index');
    $router->get('vessels/{id}', 'VesselController@show');
    $router->get('vessels', 'VesselController@index');

});

// $router->get('certificates', function(Request $request){
//     return DB::table('certificates')->get();
// });

// $router->get("/vessels", ['middleware' => 'auth', function(Request $request){
//     return DB::table('vessels')->get();
// }]);    

// $router->get("/vessels/{user_id}", ['middleware' => 'auth', function(Request $request, $user_id){
//     return DB::table('vessels')->where('user_id', $user_id)->get();
// }]);

// $router->get('/vessels/{id}', ['middleware' => 'auth', function(Request $request, $id){
//     return DB::table('vessels')->find($id);
// }]);

// $router->get('users', function(Request $request){
//     $users = DB::table('users')->get();
//     return $users;
// });