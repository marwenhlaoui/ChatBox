@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 well-chat">
			<div class="body-chat">
				<div class="msg-chat">
					<span class="user-img user-img-yellow">U</span>
					<span class="user-name">User Demo</span>
					<span class="user-date">{{date('Y-m-d H:i:s')}}</span>
					<p class="user-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="msg-chat">
					<span class="user-img user-img-red">M</span>
					<span class="user-name">Marwen Hlaoui</span>
					<span class="user-date">{{date('Y-m-d H:i:s')}}</span>
					<p class="user-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="msg-chat">
					<span class="user-img user-img-green">N</span>
					<span class="user-name">New User</span>
					<span class="user-date">{{date('Y-m-d H:i:s')}}</span>
					<p class="user-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>	
			</div>
			<div class="form-group console-chat">
				<div class="col-xs-10">
					<textarea class="form-control" placeholder="say something ...!"></textarea>
				</div>
				<div class="col-xs-2">
					<button type="submit" class="btn btn-success btn-block">Send</button>
				</div> 
			</div>
		</div>
		<div class="col-md-4">
			<div class="list-group">
				<h4 class="text-muted">Users</h4>
				<a href="#" class="list-group-item active">
				    Cras justo odio
				</a>
			  	<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			  	<a href="#" class="list-group-item">Morbi leo risus </a>
				<h4 class="text-muted">Groups</h4> 
			  	<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			  	<a href="#" class="list-group-item">Morbi leo risus </a>
			</div>
		</div>
	</div>
@endsection