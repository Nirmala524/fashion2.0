@extends('Front.index')
@section('fashion')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/shop') }}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>

                @php
                    $images = json_decode($products->images);
                @endphp
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($images as $image)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->iteration == 1 ? 'active' : '' }}" data-toggle="tab"
                                        href="#tabs-{{ $loop->iteration }}" role="tab">
                                        <div class="product__thumb__pic set-bg"
                                            data-setbg="{{ asset('storage/product/images/' . $image) }}">
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            @foreach ($images as $secondimage)
                                <div class="tab-pane {{ $loop->iteration == 1 ? 'active' : '' }}"
                                    id="tabs-{{ $loop->iteration }}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="{{ asset('storage/product/images/' . $secondimage) }}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{ $products->title }}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3>${{ $products->price }} <span>70.00</span></h3>
                            <p>{{ $detail->desc }}</p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    
                                    @php
                                        $sizes = json_decode($products->size);
                                    @endphp
                                    <span>Size:</span>

                                    @foreach ($sizes as $itemSize)
                                        @php
                                            $datasize = App\Models\Size::find($itemSize);
                                        @endphp
                                        <label for="xxl">{{ $datasize->size }}
                                            <input type="radio" id="{{ $datasize->size }}">
                                        </label>
                                    @endforeach

                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>

                                    <label class="c-1" for="sp-1">
                                        <input type="color" id="sp-1">
                                    </label>

                                    {{-- <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label> --}}
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <input type="hidden" id="product_id" value="{{ $products->id }}">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" id="product_quantity">
                                    </div>
                                </div>
                                <button id="addcart" class="primary-btn">Add to Cart</button>

                                {{-- <a href="#" class="primary-btn">add to cart</a> --}}
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>SKU:</span> 3812912</li>
                                    <li><span>Categories:</span>{{ $products->CategoryName->category }}</li>
                                    @php
                                        $tags = json_decode($products->tag);
                                    @endphp

                                    <li><span>Tag:</span>
                                        @foreach ($tags as $singletag)
                                            @php
                                                $tagdata = App\Models\Tag::find($singletag);
                                            @endphp
                                            {{ $tagdata->tag }}
                                        @endforeach
                                    </li>
                                    <li><span>Branding:</span>{{ $products->BrandName->brand }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                        role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                        Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                        information</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">{!! $detail->add !!}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($shop as $shops)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                        <a href="{{ url('shopdetails/' . $shops->id) }}">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('storage/product/thumbnail/' . $shops->thumbnail) }}">
                                    {{-- <span class="label">New</span> --}}
                                    {{-- <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('front/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('front/img/icon/compare.png') }}"
                                                    alt="">
                                                <span>Compare</span></a></li>
                                        <li><a href="#"><img src="{{ asset('front/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>   --}}
                                </div>
                                <div class="product__item__text">
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <h6>{{ $shops->title }}</h6>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>${{ $shops->price }}</h5>
                                    <div class="product__color__select">
                                        <label for="pc-1">
                                            <input type="radio" id="pc-1">
                                        </label>
                                        <label class="active black" for="pc-2">
                                            <input type="radio" id="pc-2">
                                        </label>
                                        <label class="grey" for="pc-3">
                                            <input type="radio" id="pc-3">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection
