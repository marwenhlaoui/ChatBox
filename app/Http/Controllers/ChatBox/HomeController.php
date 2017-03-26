<?php

namespace App\Http\Controllers\ChatBox;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message;
use App\Model\User;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.index');
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Message::where('from',$id)
                        ->orWhere('to',$id)
                        ->orderBy('created_at','desc')
                        ->get();
        $user = User::find($id);
        return view('app.show',compact('data','user'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $msg = new Message();
        $msg->from      = \Auth::user()->id;
        $msg->to        = $id;
        $msg->content   = $req->content;
        $msg->type      = false;
        $msg->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
