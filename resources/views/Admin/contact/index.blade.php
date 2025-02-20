@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit data</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="tile-body">
                    <form action="{{ url('admin/contact/update') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="control-label">Map</label>
                            <input class="form-control" type="text" name="map" value="{{ $data->map }}">
                            @error('map')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter Title"
                                value="{{ $data->title }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter Name"
                                value="{{ $data->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="desc" id="editior">{{ $data->desc }}</textarea>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">America Name</label>
                            <input class="form-control" type="text" name="nameA" placeholder="Enter name America"
                                value="{{ $data->nameA }}">
                            @error('nameA')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">America</label>
                            <textarea name="america" id="americ">{{ $data->america }}</textarea>
                            @error('america')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">France Name</label>
                            <input class="form-control" type="text" name="nameF" placeholder="Enter name France"
                                value="{{ $data->nameF }}">
                            @error('nameF')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
 
                        <div class="form-group">
                            <label class="control-label">France</label>
                            <textarea name="france" id="franc">{{!! $data->france !!}}</textarea>
                            @error('france')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>update</button>&nbsp;&nbsp;&nbsp;<a
                                class="btn btn-secondary" href="#"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
