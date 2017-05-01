<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masinlar;
class SehifeController extends Controller
{
    public function index()
    {
        $masinlar  = Masinlar::orderBy('id', 'DESC')->take(6)->get();
        return view('pages.index')->withMasinlar($masinlar);
    }
}
