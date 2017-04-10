<?php

namespace App\Http\Controllers\TChatBox;

use App\Model\Message;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivedController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
 
    public function index(Request $req){ 
        if (!empty($req->input('u'))) {
            $user = User::find($req->input('u'));
            if(!empty($user->id)){
                $slug = str_slug($user->name.$user->id);
                return redirect()->route('message.box',$slug);
            }
        }
        return redirect()->back();
    }

    public function box($slug){  
        $users = User::all();
        foreach ($users as $key => $user) {
            if (str_slug($user->name.$user->id) == $slug) {
                $data = Message::orderBy('created_at','desc')
                                    ->where(['from'=>\Auth::user()->id,'to'=>$user->id]) 
                                    ->orWhere(['to'=>\Auth::user()->id,'from'=>$user->id])
                                    ->get(); 
                $friends = \Auth::user()->friends();
                return view('prived-chat',compact('user','data','friends'));
            }
        }
        return redirect()->route('users');
    }

    public function send(Request $req,$id){  
        if(!empty($req->content)){
            $msg = new Message();
            $msg->from = \Auth::user()->id;
            $msg->to = $id;
            $msg->type = false;
            $msg->content = $req->content;
            $msg->save();
        }

        return redirect()->back();
    } 


 

 
}
