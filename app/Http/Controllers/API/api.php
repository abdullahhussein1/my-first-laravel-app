<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// run command: php artisan serve

class api extends Controller
{
    public function home(){
        return 'somethin';
    }
}
