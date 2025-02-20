@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Edit Item</h3>
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
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="control-label">Thumbnail</label>
                        <input class="form-control" type="file" name="thumbnail">
                        @error('thumbnail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img style="width: 100px;" src="{{ asset('storage/product/thumbnail/' . $product->thumbnail) }}"
                            alt="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control" type="file" name="images[]" multiple>
                        @error('image.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img style="width: 100px;" src="{{ asset('storage/product/images/' . $product->images) }}"
                            alt="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $product->title }}"
                            placeholder="Enter full Title">
                        @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Price</label>
                        <input class="form-control" type="text" name="price" placeholder="Enter price"
                            value="{{ $product->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="control-label">Size</label>
                        <select class="form-control" name="size[]" id="sizeSelect" multiple="" class="form-control"
                            value="{{ $product->size }}">
                            <optgroup label="Select size">
                                @foreach ($size as $itemsize)
                                    <option value="{{ $itemsize->id }}">{{ $itemsize->size }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('size')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Branding</label>
                        <select name="brand" class="form-control">
                            @foreach ($brand as $brands)
                                <option value="{{ $brands->id }}">{{ $brands->brand }}</option>
                            @endforeach
                        </select>
                        @error('brand')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Color</label>
                        <input class="form-control" type="text" name="color" value="{{ $product->color }}"
                            placeholder="Enter full Color">
                        @error('color')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <select name="category" class="form-control">
                            @foreach ($cat as $itemcat)
                                <option value="{{ $itemcat->id }}">{{ $itemcat->category }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="control-label">Tag</label>
                        <select name="tag[]" id="demoSelect" multiple="" class="form-control"
                            value="{{ $product->tag }}">
                            <optgroup label="Select Tag">
                                @foreach ($tag as $itemtag)
                                    <option value="{{ $itemtag->id }}">{{ $itemtag->tag }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('tag')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="control-label">Status</label>

                        <div class="toggle-flip">
                            <label>
                                <input name="status" type="checkbox"><span class="flip-indecator" data-toggle-on="Active"
                                    data-toggle-off="InActive"></span>
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
