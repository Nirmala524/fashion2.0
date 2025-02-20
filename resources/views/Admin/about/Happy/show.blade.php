@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <h4>Name:-{{ $happy->name }}</h4>
        <h4>Number:-{{ $happy->number }}</h4>

    </div>
@endsection
