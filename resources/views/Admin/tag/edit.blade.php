@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Edit Product</h3>

            <div class="tile-body">
                <form action="{{ route('tag.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label">Tag</label>
                        <input class="form-control" type="text" name="tag" value="{{ $tag->tag }}"
                            placeholder="Enter full Tag">
                        @error('Tag')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Status</label>

                        <div class="toggle-flip">
                            <label>
                                <input name="status" type="checkbox" ><span class="flip-indecator" data-toggle-on="Active"
                                    data-toggle-off="InActive" ></span>
                            </label>
                        </div>

                    </div>

                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
