@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 well-chat">
			<div class="body-chat">	
				@foreach($data as $item)
				<div class="msg-chat">
					<span class="user-img"></span>
					<span class="user-name">{{$item->from()->name}}</span>
					<span class="user-date">{{$item->created_at}}</span>
					<p class="user-text">{{$item->content}}</p>
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
@section('js')
	<script type="text/javascript">
		
			 
 /*
				
		setInterval(getMsg(), 5000);

		function getMsg(){
			var url = "{{route('api.chat',$user->id)}}";
			var body = $('.body-chat');
			var div = ""; 
			$.get(url,function (data) {
					console.log(data);
					$.each(data.data,function(k,item){ 
						div += '<div class="msg-chat"><span class="user-img user-img-yellow">'+item.from+'</span><span class="user-name">'+item.from+'</span><span class="user-date">'+item.created_at+'</span><p class="user-text">'+item.content+'</p></div>';
					});
				body.html(div);   
			});

		}*/


		$(function() {
		  setInterval(function() {
		    var url = "{{route('api.chat',$user->id)}}";
			var body = $('.body-chat');
			var div = ""; 
			$.get(url,function (data) {
					console.log(data);
					$.each(data.data,function(k,item){ 
						div += '<div class="msg-chat"><span class="user-img"></span><span class="user-name">'+item.from+'</span><span class="user-date">'+item.created_at+'</span><p class="user-text">'+item.content+'</p></div>';
					});
				body.html(div);   
			});
		  },6000);
		}); 
	</script>
@endsection