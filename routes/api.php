<?php

use App\Models\Role;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

require __DIR__.'/users.php';


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




/* Route::get('users/{id}', function($id) {
    
    $user = User::with('role')->get();
    
    return response()->json($user);

}); */
