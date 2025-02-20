@extends('Front.index')
@section('fashion')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="blog__hero__text">
                    <h2>{{ $trends->name }}</h2>
                    <ul>
                        <li>By Deercreative</li>
                        <li>{{ $trends->date }}</li>
                        <li>8 Comments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__pic">
                    <img src="{{ asset('storage/trends/' . $trends->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <div class="blog__details__share">
                        <span>share</span>
                        <ul>
                            <li><a target="blank" href="{{ $blog->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="blank" href="{{ $blog->twitter }}" class="twitter"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a target="blank" href="{{ $blog->youtube }}" class="youtube"><i
                                        class="fa fa-youtube-play"></i></a></li>
                            <li><a target="blank" href="{{ $blog->linkedin }}" class="linkedin"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog__details__text">
                        <p>{!! $blog->desc !!}</p>

                    </div>
                    <div class="blog__details__quote">
                        <i class="fa fa-quote-left"></i>
                        <p>{{ $blog->title }}</p>
                        <h6>{{ $blog->name }}</h6>
                    </div>
                    <div class="blog__details__text">
                        <p>{!! $blog->descr !!}</p>
                    </div>
                    <div class="blog__details__option">
                        <div class="row">
                            @foreach ($comment as $comments)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="{{ asset('front/img/blog/details/blog-author.jpg') }} "
                                                alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>{{ $comments->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="#">#Fashion</a>
                                        <a href="#">#Trending</a>
                                        <a href="#">#2020</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            @foreach ($comment as $comments)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Previous Pod</p>
                                        <h5>{{ $comments->comment }}</h5>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="" class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Next Pod <span class="arrow_right"></span></p>
                                        <h5>Tips For Choosing The Perfect Gloss For Your Lips</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="blog__details__comment">
                        <h4>Leave A Comment</h4>
                        <form action="{{ url('admin/Comment/store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <input type="text" name="number" placeholder="Phone">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Comment" name="comment"></textarea>
                                    <button type="submit" class="site-btn">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
