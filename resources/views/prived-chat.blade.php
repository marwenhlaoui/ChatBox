@extends('layouts.app') 
@section('title',$user->name) 
@section('content') 
<div class="container">
    <div class="row">
        <h2 class="text-center text-title2">{{$user->name}}</h2>
        <div class="col-md-8 col-md-offset-2"> 
          <div class="col-xs-9">
            <div class="tchat col-xs-12 well">
            	@foreach($data as $msg)
            		<div class="msg-item">
            			<b class="user"> 
            				<span class="img-profile"></span>
            				{{ $msg->from()->name }}
            			</b>
            			<span class="pull-right text-muted">{{ $msg->created_at->diffForHumans() }}</span>
            			<p>{{$msg->content}}</p>
            		</div>
            	@endforeach
            </div>
            <div class="console col-xs-12">
            	<form action="{{route('message.send',$user->id)}}" method="post"> 
                    {{ csrf_field() }}
				    <div class="form-group">
				      <div class="col-xs-10"> 
            			<textarea class="form-control" name="content"></textarea> 
				      </div>
				      <div class="col-xs-2">  
				        <button type="submit" class="btn btn-success btn-xs btn-block">Submit</button>
				      </div>
				    </div>
            	</form>
            </div>
          </div>
          <div class="col-xs-3">
            <div class="list-group">
            	@foreach($friends as $friend) 
				<a href="{{route('message')}}?u={{$friend->id}}" class="list-group-item {{($friend->id == $user->id)? 'active' : '' }} item-user">
            		<span class="img-profile"></span>
				   {{$friend->name}}
				</a> 
				@endforeach
			</div>
          </div>
        </div>
    </div>
</div> 
@stop 
@section('js')
<script type="text/javascript">
	
</script>
@stop