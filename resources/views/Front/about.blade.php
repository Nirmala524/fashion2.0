@extends('Front.index')
@section('fashion')
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('storage/about/meet/first/' . $meet->firstImg) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($que as $ques)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="about__item">
                            <h4>{{$ques->title}}</h4>
                            <p>{{$ques->desc}}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial__text">
                        <span class="icon_quotations"></span>
                        <p>{{ $meet->desc }}
                        </p>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset('storage/about/meet/midlle/' . $meet->midlleImg) }}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>{{ $meet->schultz }}</h5>
                                <p>{{ $meet->design }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial__pic set-bg"
                        data-setbg="{{ asset('storage/about/meet/last/' . $meet->lastImg) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter spad">
        <div class="container">
            <div class="row">
                @foreach ($happy as $happies)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="cn_num">{{ $happies->number }}</h2>
                            </div>
                            <span>{{ $happies->name }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>{{ $meet->our }}</span>
                        <h2>{{ $meet->team }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $teams)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team__item">
                            <img src="{{ asset('storage/about/team/' . $teams->image) }}" alt="">
                            <h4>{{ $teams->name }}</h4>
                            <span>{{ $teams->role }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Client Section Begin -->
    <section class="clients spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>{{ $meet->partner }}</span>
                        <h2>{{ $meet->client }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($partner as $partners)
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item">
                            <img src="{{ asset('storage/about/partner/' . $partners->image) }} ">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Client Section End -->
@endsection
