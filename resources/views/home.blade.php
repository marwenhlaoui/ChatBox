@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center text-title">ChatBox</h1>
        <div class="col-md-8 col-md-offset-2"> 
           <div class="col-md-5"> 
             <a href="{{route('users')}}" class="card">
                  <i class="ion ion-key"></i>
                  <h3>Prived</h3>
             </a>
           </div>
           <div class="col-md-5 col-md-offset-1">
                <a href="" class="card">
                  <i class="ion ion-person-stalker"></i>
                  <h3>Group</h3>
                </a>
           </div>
        </div>
    </div>
</div>
@endsection
