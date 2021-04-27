<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    
    public function get(Request $request)
    {
        $users = User::with('person')->get();
        
        return $this->sendResponse($users, '');

    }
}
