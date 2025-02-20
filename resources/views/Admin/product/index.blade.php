@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                {{-- <div class="d-flex align-items-center"> --}}
                <h3 class="title">Product Detail</h3>



                @if (session('success'))
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-success">
                                <button class="close" type="button" data-dismiss="alert">×</button>
                                <h1> <strong> {{ session('success') }} </strong></h1>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('danger'))
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-danger">
                                <button class="close" type="button" data-dismiss="alert">×</button>
                                <h1><strong> {{ session('danger') }} </strong></h1>
                            </div>
                        </div>
                    </div>
                @endif

                <p> <a class="btn btn-primary icon-btn" href="{{ route('product.create') }}">
                        <i class="fa fa-plus"></i>
                        Add Product
                    </a>
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table id="sampleTable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Thumbnail</th>
                                    <th>Images</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Branding</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>

                                        <td><img style="height: 80px"
                                                src="{{ asset('storage/product/thumbnail/' . $item->thumbnail) }}"></td>

                                        @php
                                            $images = json_decode($item->images);
                                        @endphp
                                        <td>
                                            @foreach ($images as $multipleImg)
                                                <img style="height: 80px"
                                                    src="{{ asset('storage/product/images/' . $multipleImg) }}">
                                            @endforeach
                                        </td>

                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->price }}</td>

                                        <td> 
                                         
                                            {{ $item->BrandName->brand }} 
                                            @php
                                            $sizes = json_decode($item->size);
                                        @endphp
                                        
                                        <td>
                                            @foreach ($sizes as $singlsize)
                                                @php
                                                    $data = App\Models\Size::find($singlsize);
                                                @endphp
                                                {{ $data->size }}
                                            @endforeach
                                        </td>

                                        <td>{{ $item->color }}</td>
                                        <td>
                                            {{ $item->CategoryName->category }}
                                            @php
                                                $tags = json_decode($item->tag);
                                            @endphp
                                        </td>
                                        <td>
                                            @foreach ($tags as $singltag)
                                                @php
                                                    $addtag = App\Models\Tag::find($singltag);
                                                @endphp
                                                {{ $addtag->tag }}
                                            @endforeach
                                        </td>


                                        <td> <span class="badge btn badge-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                                {{ $item->status == 1 ? 'Active' : 'InActive' }}</span>
                                        </td>
                                        <td>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST">

                                                <a class="btn btn-info btn-ms"
                                                    href="{{ route('product.show', $item->id) }}"> </i> Show</a>
                                                <a class="btn btn-success btn-ms"
                                                    href="{{ route('product.edit', $item->id) }}"> Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-ms"> </i> Delete</button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $product->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
