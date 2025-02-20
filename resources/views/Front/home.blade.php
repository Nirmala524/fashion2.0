@extends('Front.index')
@section('fashion')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($slider as $item)
                <div class="hero__items set-bg" data-setbg="{{ asset('storage/slider/' . $item->image) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-8">
                                <div class="hero__text">
                                    <h6>{{ $item->name }}</h6>
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ $item->desc }}</p>
                                    <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                    <div class="hero__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ asset('storage/BannerClothing/' . $BannerClothing->image) }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            {{-- <h2>Clothing Collections 2030</h2> --}}
                            <h2>{{ $BannerClothing->title }}</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ asset('storage/Accessories/' . $Accessories->image) }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $Accessories->title }}</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ asset('storage/Shoes/' . $Shoes->image) }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $Shoes->title }}</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" onclick="bestSellers()">Best Sellers</li>
                        @foreach ($cat as $itemcat)
                            <li onclick="fetchProduct({{ $itemcat->id }})">
                                {{ $itemcat->category }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row product__filter" id="filter_data">

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2> Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{ asset('storage/Chest/' . $chest->image) }}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>{{ $chest->name }}</span>
                        <h2>{{ $chest->title }}</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($instagram as $inst)
                        <div class="instagram__pic">
                            <div class="instagram__pic__item set-bg"
                                data-setbg="{{ asset('storage/Instagram/' . $inst->image) }}"></div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>{{ $img->name }}</h2>
                        <p>{{ $img->desc }}</p>
                        <h3>{{ $img->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>{{ $fashion->name }}</span>
                        <h2>{{ $fashion->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($trend as $trends)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg"
                                data-setbg="{{ asset('storage/trends/' . $trends->image) }}">
                            </div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('front/img/icon/calendar.png') }}"
                                        alt="">{{ $trends->date }}</span>
                                <h5>{{ $trends->name }}</h5>
                                <a href="{{ url('blog-details/'.$trends->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection

@push('scripts')
    <script>
        function fetchProduct(id) {
            $.ajax({
                type: "GET",
                url: "fetch-product/" + id,
                data: {
                    productId: id
                },
                dataType: "json",
                success: function(response) {
                    $("#filter_data").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.products.map((item) => {
                            output += `
                                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                                    <div class="product__item">
                                        <a href="{{ url('shopdetails/${item.id}') }}">
                                            <div class="product__item__pic set-bg"  style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                            </div>
                                        <div class="product__item__text">
                                            <a href="#" class="add-cart">+ Add To Cart</a>
                                            <h6>${ item.title }</h6>
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h5>${  item.price  }</h5>
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
                                    </a>
                                </div>
                            </div>
                        `;
                        });
                        $("#filter_data").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }

        function fetchAllProduct() {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchAllProduct') }}",
                dataType: "json",
                success: function(response) {
                    $("#filter_data").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.products.map((item) => {
                            output += `
                                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                                    <div class="product__item">
                                        <a href="{{ url('shopdetails/${item.id}') }}">
                                            <div class="product__item__pic set-bg"  style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                            </div>
                                        <div class="product__item__text">
                                            <a href="#" class="add-cart">+ Add To Cart</a>
                                            <h6>${ item.title }</h6>
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h5>${  item.price  }</h5>
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
                                    </a>
                                </div>
                            </div>
                        `;
                        });
                        $("#filter_data").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }

        function bestSellers() {
            fetchAllProduct();
        }

        fetchAllProduct();
    </script>
@endpush
