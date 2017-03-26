@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 well-chat">
			<div class="body-chat">
			 		
			</div> 
		</div>
		<div class="col-md-4">
			<div class="list-group">
				@include('app._vendor._frendsList')
				@include('app._vendor._groupsList')
			</div>
		</div>
	</div>
@endsection