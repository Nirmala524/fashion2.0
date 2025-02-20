@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit data</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/about/meet/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter desc"
                                value="{{ $data->desc }}">
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="schultz" placeholder="Enter schultz"
                                value="{{ $data->schultz }}">
                            @error('schultz')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="design" placeholder="Enter design"
                                value="{{ $data->design }}">
                            @error('design')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Our</label>
                            <input class="form-control" type="text" name="our" placeholder="Enter our"
                                value="{{ $data->our }}">
                            @error('our')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Team</label>
                            <input class="form-control" type="text" name="team" placeholder="Enter team"
                                value="{{ $data->team }}">
                            @error('team')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Partner</label>
                            <input class="form-control" type="text" name="partner" placeholder="Enter partner"
                                value="{{ $data->partner }}">
                            @error('partner')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Client</label>
                            <input class="form-control" type="text" name="client" placeholder="Enter client"
                                value="{{ $data->client }}">
                            @error('client')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">First Image</label>
                            <input class="form-control" type="file" name="firstImg" value="{{ $data->firstImg }}"
                                placeholder="Enter firstImg">
                            <img style="height: 200px" src="{{ asset('storage/about/meet/first/' . $data->firstImg) }}" alt="">

                            @error('firstImg')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="control-label">Midlle Image</label>
                            <input class="form-control" type="file" name="midlleImg" value="{{ $data->midlleImg }}"
                                placeholder="Enter midlleImg">
                            <img style="height: 200px" src="{{ asset('storage/about/meet/midlle/' . $data->midlleImg) }}" alt="">

                            @error('midlleImg')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="control-label">Last Image</label>
                            <input class="form-control" type="file" name="lastImg" value="{{ $data->lastImg }}"
                                placeholder="Enter lastImg">
                            <img style="height: 200px" src="{{ asset('storage/about/meet/last/' . $data->lastImg) }}" alt="">
                            @error('lastImg')
                                <div class="alert text-danger">{{ $message }}</div>
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
