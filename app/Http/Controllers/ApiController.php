<?php

namespace App\Http\Controllers;

use App\Model\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function users(Request $req){
    	$w = $req->input('s');
    	$users = (!empty($w))? User::where('name','like','%'.$w.'%')->get() : User::all() ;
    	return response()->json(compact('users'));
    }
}
