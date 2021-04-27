<?php

use App\Http\Controllers\Api\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('emails', [EmailController::class, 'search']);

    
?>