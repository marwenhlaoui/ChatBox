<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use App\Model\Message;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function friends(){
        $friends = [];
        $list = [];
        $all =  Message::where('from',$this->id)
                        ->orWhere('to',$this->id)
                        ->get();
        foreach ($all as $key => $value) {
            if ((!in_array($value->from, $list)&&($value->from != $this->id))) {
                $list[] = $value->from; 
            }
            if ((!in_array($value->to, $list)&&($value->to != $this->id))) {
                $list[] = $value->to; 
            }
        }
        foreach ($list as $item) {
            $friends[] = User::find($item);
        } 
        return json_decode(json_encode($friends));
    }
}
