<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function search(Request $request)
    {
        //$countElements = $request->input('elements', 10);

        $emails = Email::ignoreRequest(['perpage'])
            ->filter()
            ->orderByDesc('created_at') 
            ->paginate($request->get('perpage'), ['*'], 'page');
            //->get();

    

                    
        return response($emails);
    }
}
