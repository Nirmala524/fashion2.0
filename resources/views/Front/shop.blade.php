@extends('Front.index')
@section('fashion')
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach ($cat as $item)
                                                        <li>
                                                            <a onclick="fetchProduct({{ $item->id }})"
                                                                href="#">{{ $item->category }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    @foreach ($brand as $brands)
                                                        <li>
                                                            <a onclick="fetchBrand({{ $brands->id }})"
                                                                href="#">{{ $brands->brand }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>

                                                    <li><a href="#">$0.00 - $50.00</a></li>
                                                    <li><a href="#">$50.00 - $100.00</a></li>
                                                    <li><a href="#">$100.00 - $150.00</a></li>
                                                    <li><a href="#">$150.00 - $200.00</a></li>
                                                    <li><a href="#">$200.00 - $250.00</a></li>
                                                    <li><a href="#">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                @foreach ($size as $sizes)
                                                    <label for="xs">{{ $sizes->size }}
                                                        <input type="radio" id="{{ $sizes->size }}">
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                                <label class="c-1" for="sp-1">
                                                    <input type="radio" id="sp-1">
                                                </label>
                                                <label class="c-2" for="sp-2">
                                                    <input type="radio" id="sp-2">
                                                </label>
                                                <label class="c-3" for="sp-3">
                                                    <input type="radio" id="sp-3">
                                                </label>
                                                <label class="c-4" for="sp-4">
                                                    <input type="radio" id="sp-4">
                                                </label>
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                @foreach ($tag as $tags)
                                                    <a href="#">{{ $tags->tag }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="category" >

                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
@push('scripts')
    <script>
        function fetchProduct(id) {
            $.ajax({
                type: "GET",
                url: "fetch-category/" + id,
                data: {
                    productId: id
                },
                dataType: "json",
                success: function(response) {
                    $("#category").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.categories.map((item) => {
                            output += `
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="{{ url('shopdetails/${item.id}') }}">
                                        <div class="product__item__pic set-bg"
                                           style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                        </div>
                                    </a>
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
                                            <label for="pc-4">
                                                <input type="radio" id="pc-4">
                                            </label>
                                            <label class="active black" for="pc-5">
                                                <input type="radio" id="pc-5">
                                            </label>
                                            <label class="grey" for="pc-6">
                                                <input type="radio" id="pc-6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        });
                        $("#category").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }

        function fetchAllProduct(id) {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchAllCategory') }}",
                data: {
                    productId: id
                },
                dataType: "json",
                success: function(response) {
                    $("#category").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.categories.map((item) => {
                            output += `
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="{{ url('shopdetails/${item.id}') }}">
                                            <div class="product__item__pic set-bg"
                                                 style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                            </div>
                                        </a>
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
                                                <label for="pc-4">
                                                    <input type="radio" id="pc-4">
                                                </label>
                                                <label class="active black" for="pc-5">
                                                    <input type="radio" id="pc-5">
                                                </label>
                                                <label class="grey" for="pc-6">
                                                    <input type="radio" id="pc-6">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        `;
                        });
                        $("#category").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }
        fetchAllProduct();
    </script>

    <script>
        function fetchBrand(id) {
            $.ajax({
                type: "GET",
                url: "fetch-brand/" + id,
                data: {
                    brandId: id
                },
                dataType: "json",
                success: function(response) {
                    $("#category").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.brands.map((item) => {
                            output += `
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="{{ url('shopdetails/${item.id}') }}">
                                        <div class="product__item__pic set-bg"
                                           style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                        </div>
                                    </a>
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
                                            <label for="pc-4">
                                                <input type="radio" id="pc-4">
                                            </label>
                                            <label class="active black" for="pc-5">
                                                <input type="radio" id="pc-5">
                                            </label>
                                            <label class="grey" for="pc-6">
                                                <input type="radio" id="pc-6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        });
                        $("#category").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }

        function fetchAllBrand(id) {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchAllBrand') }}",
                data: {
                    brandId: id
                },
                dataType: "json",
                success: function(response) {
                    $("#category").empty();
                    let output = "";
                    if (response.status == 200) {
                        response.brands.map((item) => {
                            output += `
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="{{ url('shopdetails/${item.id}') }}">
                                            <div class="product__item__pic set-bg"
                                                 style="background-image: url('{{ asset('storage/product/thumbnail/`+item.thumbnail+`') }}'); background-repeat: no-repeat; background-size: cover;" >
                                            </div>
                                        </a>
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
                                                <label for="pc-4">
                                                    <input type="radio" id="pc-4">
                                                </label>
                                                <label class="active black" for="pc-5">
                                                    <input type="radio" id="pc-5">
                                                </label>
                                                <label class="grey" for="pc-6">
                                                    <input type="radio" id="pc-6">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        `;
                        });
                        $("#category").html(output);
                    } else {
                        console.log("Product Is Not Found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching product:", status, error);
                }
            });
        }
        fetchAllBrand();
    </script>
@endpush
