<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masinlar;
use App\User;
class SehifeController extends Controller
{
    public function index(){
        $masinlar  = Masinlar::orderBy('id', 'DESC')->take(6)->get();
        return view('pages.index')->withMasinlar($masinlar);
    }

    public function istifadeciler(){
      $istifadeciler = User::all();
      $admin = User::find(1);
      $admin->isAdmin = "YES";
      $admin->isVerified = "YES";
      $admin->save();
      return view('users.index')->withIstifadeciler($istifadeciler);
    }

}
