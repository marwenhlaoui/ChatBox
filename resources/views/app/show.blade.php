@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 well-chat">
			<div class="body-chat">
			@foreach($data as $msg)
				<div class="msg-chat">
					<span class="user-img user-img-yellow">{{ ucfirst(str_limit($msg->from()->name,1,'')) }}</span>
					<span class="user-name">{{ $msg->from()->name }}</span>
					<span class="user-date">{{$msg->created_at}}</span>
					<p class="user-text">{{$msg->content}}</p>
				</div>
			@endforeach 	
			</div>
			<form class="form-group console-chat" action="{{ route('chatbox.update',$user->id) }}" method="post">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="col-xs-10">
					<textarea class="form-control" name="content" placeholder="say something ...!"></textarea>
				</div>
				<div class="col-xs-2">
					<button type="submit" class="btn btn-success btn-block">Send</button>
				</div> 
			</form>
		</div>
		<div class="col-md-4">
			<div class="list-group">
				@include('app._vendor._frendsList')
				@include('app._vendor._groupsList') 
			</div>
		</div>
	</div>
@endsection