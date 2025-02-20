@extends('Admin.index')
@section('content')
 
 

<div class="col-md-12">
    <h4>Name:-{{$slider->name}}</h4>
    <h4>Title:-{{$slider->title}}</h4>
    <h4>Description:-{{$slider->desc}}</h4>
    <h4>Images:-<img style="height: 400px" src="{{ asset('storage/slider/' . $slider->image) }}"></h4>

</div>
    
@endsection