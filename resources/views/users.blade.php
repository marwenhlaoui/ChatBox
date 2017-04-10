@extends('layouts.app')
@section('title','Users')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center text-title">ChatBox</h1>
        <div class="col-md-8 col-md-offset-2"> 
          <div class="col-md-8 col-md-offset-2">
            <div class="form-group"> 
              <input class="form-control" id="searchUser" type="text" placeholder="Search ...">
            </div>
          </div>
          <div class="allusers col-md-12">
            @foreach($users as $user)
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="img-user pull-left"></span>
                  <h4>{{$user->name}}</h4>
                  <a href="{{route('message')}}?u={{$user->id}}" class="btn btn-success btn-xs pull-right"> &nbsp; <span class="ion ion-chatbox-working ion-2x"> &nbsp; </span></a>
                </div>
                <div class="panel-body">
                  <span class="ion ion-at"></span> &nbsp; <span class="text-max">{{$user->email}}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
  
    $('#searchUser').on('input',function(){
        var msgRoute = "{{route('message')}}";
        var w = $(this).val();
        $(this).val(w.replace("  ", " "));
        w.replace('  ','+');
        var list = $('.allusers');
        var html = ""; 
          var url = "{{route('api.users')}}?s="+w;
          $.get(url,function(data){
            $.each(data.users,function(k,user){ 
                html +='<div class="col-lg-4 col-md-6 col-sm-6"><div class="panel panel-default"><div class="panel-heading"><span class="img-user pull-left"></span><h4>'+user.name+'</h4><a href="'+msgRoute+'?u='+user.id+'" class="btn btn-success btn-xs pull-right"> &nbsp; <span class="ion ion-chatbox-working ion-2x"> &nbsp; </span></a></div><div class="panel-body"><span class="ion ion-at"></span> &nbsp; '+user.email+'</div></div></div>';
            });
            list.html(html);
          }); 
    });

</script>
@endsection
