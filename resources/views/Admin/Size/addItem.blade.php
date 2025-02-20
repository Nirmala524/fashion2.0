@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Add New Size</h3>
            <div class="tile-body">
                <form action="{{ route('size.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Size</label>
                        <input class="form-control" type="text" name="size" value="{{ old('size') }}"
                            placeholder="Enter Size">
                        @error('size')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>ADD</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
