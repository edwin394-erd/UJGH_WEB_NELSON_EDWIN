<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
   public function Store(){
        auth()->logout();

        return redirect(route('login'));
   }
}
