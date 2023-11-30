<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function sayHi()
    {
        $result = 25;
        return view('hello', ['result' => $result]);
    }
}
