<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(){
        return  'Hello, Laravel!';
    }

    public function hello(Request $request):string{
        $name = $request->name;
        $age = $request->age;
        Log::info($name);
        Log::alert($age);
        return "hello  My Name Is $name And I am $age Yearas of Old";
    }


    public function store(Request $request){
        $request->session()->put('userEmail',$request->email);
        return "Session Save succesfully";
    }

    public function getSession(Request $request){
       return $request->session()->get('userEmail',"nothing is set");

    }
    public function delSession(Request $request){
        $request->session()->forget('userEmail');

        return "session single deleted";

     }
     public function flushSession(Request $request){
        $request->session()->flush();
        return "Session Deleted";

     }

     public function MiddlewareCheck(){
        return "Hello This is after Middleware";
     }

     public function checkFail(){
        return "You Are Fail";
     }

}
