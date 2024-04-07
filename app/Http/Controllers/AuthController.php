<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{
  public function logout() {
    sleep(5);
    return to_route('login');
  }

  public function login() : Response {
    return Inertia::render('Auth/Login');
  }

  public function register() : Response {
    return Inertia::render('Auth/Register');
  }

  public function forgot() : Response {
    return Inertia::render('Auth/Forgot');
  }
}
