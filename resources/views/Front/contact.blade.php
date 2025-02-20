@extends('Front.index')
@section('fashion')
    <!-- Map Begin -->
    <div class="map">
        <iframe src="{{ $contact->map }}" height="500" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>{{ $contact->title }}</span>
                            <h2>{{ $contact->name }}</h2>
                            <p>{!! $contact->desc !!}</p>
                        </div>
                        <ul>
                            <li>
                                <h4>{{ $contact->nameA }}</h4>
                                <p>{!! $contact->america !!}</p>
                            </li>
                            <li>
                                <h4>{{ $contact->nameF }}</h4>
                                <p>{!! $contact->france !!}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
