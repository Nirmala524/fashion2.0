@extends('Admin.index')
@section('content')
 
 

<div class="col-md-12">
    <h4>Name:-{{$team->name}}</h4>
    <h4>Role:-{{$team->role}}</h4>
    <h4>Images:-<img style="height: 400px" src="{{ asset('storage/about/team/' . $team->image) }}"></h4>

</div>
    
@endsection