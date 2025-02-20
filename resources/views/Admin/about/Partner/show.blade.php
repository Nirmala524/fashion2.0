@extends('Admin.index')
@section('content')
 
 

<div class="col-md-12">
 
    <h4>Images:-<img style="height: 400px" src="{{ asset('storage/about/partner/' . $partner->image) }}"></h4>

</div>
    
@endsection