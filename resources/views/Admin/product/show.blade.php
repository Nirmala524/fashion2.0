@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <h4>Thumbnail:-
            <img style="height: 200px" src="{{ asset('storage/product/thumbnail/' . $product->thumbnail) }}" alt="">
        </h4>
        @php
            $images = json_decode($product->images);
        @endphp
        {{-- @dd($images) --}}
        <h4>Images:-
            @foreach ($images as $item)
                <img style="height: 100px" src="{{ asset('storage/product/images/' . $item) }}" alt="">
            @endforeach
        </h4>
        <h4>Title:-{{ $product->title }}</h4>
        <h4>Price:-{{ $product->price }}</h4>
        <h4>Size:-{{ $product->size }}</h4>
        <h4>Color:-{{ $product->color }}</h4>
        <h4>Category:-{{ $product->CategoryName->category }}</h4>
        @php
            $tags = json_decode($product->tag);
        @endphp
        <h4>Tag:-
            @foreach ($tags as $item)
                @php
                    $addtag = App\Models\Tag::find($item);
                @endphp
                {{ $addtag->tag }}
            @endforeach
        </h4>
    </div>
@endsection
