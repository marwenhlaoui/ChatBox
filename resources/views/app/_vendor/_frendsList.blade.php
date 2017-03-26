<h5 class="text-muted text-right">Users</h5>
@foreach(App\Model\User::where('id','!=',Auth::user()->id)->get() as $friend)
	<a href="{{ route('chatbox.show',$friend->id) }}" class="list-group-item {{ (!empty($user->id)&&($user->id == $friend->id))? 'active' : ''}}">{{$friend->name}}</a>
@endforeach