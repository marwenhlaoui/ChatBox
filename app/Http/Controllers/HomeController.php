<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    } 

    public function index()
    {
        return view('home');
    }

    public function users()
    {
        $users = (\Auth::check())?User::where('id','!=',\Auth::user()->id)->get():User::all();
        return view('users',compact('users'));
    } 

    public function news()
    {
        $this->middleware('auth');
        return view('news');
    }
}
