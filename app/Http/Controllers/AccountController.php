<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
  public function getSignOut() {

Auth::logout();
return redirect('/login');

}
}
