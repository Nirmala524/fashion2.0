@extends('Front.index')
@section('fashion')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="{{ asset('storage/Blog/' . $our->image) }} ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $our->title }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('storage/trends/' . $item->image) }}">
                            </div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt="">{{ $item->date }}</span>
                                <h5>{{ $item->name }}s</h5>
                                <a href="{{ url('blog-details/'.$item->id) }}">Read More</a>
                            </div> 
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
