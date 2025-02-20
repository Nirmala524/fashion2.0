@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Add New Branding</h3>
            <div class="tile-body">
                <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Branding</label>
                        <input class="form-control" type="text" name="brand" value="{{ old('brand') }}"
                            placeholder="Enter Branding">
                        @error('brand')
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
