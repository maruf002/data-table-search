<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\userController;
use App\User;

class userController extends Controller
{
    public function index(){
        $total = User::get();
        $user = User::paginate(6);
        return view('welcome',compact('user','total'));
    }

    public function namesearch(Request $request){
        $query = $request->input('query');
        $info = User::where('name', 'LIKE',"%$query%")->get();
        return view('search',compact('query','info'));
    }

    public function phonesearch(Request $request){
        $query = $request->input('query');
        $info = User::where('PHONE', 'LIKE',"%$query%")->get();
        return view('search',compact('query','info'));
    }

    public function addsearch(Request $request){
       $query = $request->input('query');
        $info = User::where('address', 'LIKE',"%$query%")->get();
        return view('search',compact('query','info'));
    }
}
