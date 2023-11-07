@extends('layouts.enduser')
@section('title')
Beranda
@endsection
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="full-height vertical-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double sm-hide"></div>
                <div class="col-lg-6">
                    <h4><span class="id-color">| Rencanakan Liburan</span></h4>
                    <div class="spacer-10"></div>
                    <h1>Jelajahi dunia,
                        <div class="words-wrapper">
                            dengan
                            <div class="words">
                                <span>sahabat</span>
                                <span>teman</span>
                                <span>keluarga</span>
                                <span>kerabat</span>
                                <span>kolega</span>
                            </div>
                        </div>
                    </h1>

                    <p class="lead">Yaze Holidays melayani rental mobil, paket trip, liburan keluarga domestic & internasional. Layanan yang kami sediakan : Rental Mobil + Pengemudi, Wedding, Airport Drop, Hotel Reservation</p>

                    <a class="nav-link btn-main" href="#section-cars">Booking sekarang</a>&nbsp;&nbsp;&nbsp;
                    <!-- <a class="btn-main btn-black" href="#">Get the App</a> -->
                </div>

                <div class="col-lg-6">
                    <img src="images/misc/car-2.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="section-cars" class="no-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Vehicle Favourite Fleet</h2>
                    <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="clearfix"></div>

                <div class="items-carousel owl-carousel wow fadeIn mb-1">

                    @foreach($cars as $car)
                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img class="car_photo" src="{{ asset('storage/images/' . $car->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $car->car_name }}</h4>
                                    <div class="d-item_like">
                                        <!-- <i class="fa fa-heart"></i><span>74</span> -->
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">{{ $car->passenger }}</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">{{ $car->baggage }}</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">{{ $car->door }}</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">{{ $car->type }}</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>{{ $car->formattedPrice }}</span>
                                        <a class="btn-main" href="whatsapp://send?text=Hallo admin !, saya ingin rental mobil {{ $car->car_name }} yang ada di website https://yazeholidays.com/&phone=+6281222802130">Rental</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <hr>

                <h3 class="mt-1">Various Kinds of Our Fleet</h3>
                <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.</p>

                <div class="items-carousel owl-carousel wow fadeIn mb-1">

                    @foreach($cars as $car)
                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img class="car_photo" src="{{ asset('storage/images/' . $car->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $car->car_name }}</h4>
                                    <div class="d-item_like">
                                        <!-- <i class="fa fa-heart"></i><span>74</span> -->
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">{{ $car->passenger }}</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">{{ $car->baggage }}</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">{{ $car->door }}</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">{{ $car->type }}</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>{{ $car->formattedPrice }}</span>
                                        <a class="btn-main" href="whatsapp://send?text=Hallo admin !, saya ingin rental mobil {{ $car->car_name }} yang ada di website https://yazeholidays.com/&phone=+6281222802130">Rental</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="items-carousel owl-carousel wow fadeIn mb-1">

                    @foreach($cars as $car)
                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img class="car_photo" src="{{ asset('storage/images/' . $car->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $car->car_name }}</h4>
                                    <div class="d-item_like">
                                        <!-- <i class="fa fa-heart"></i><span>74</span> -->
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">{{ $car->passenger }}</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">{{ $car->baggage }}</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">{{ $car->door }}</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">{{ $car->type }}</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>{{ $car->formattedPrice }}</span>
                                        <a class="btn-main" href="whatsapp://send?text=Hallo admin !, saya ingin rental mobil {{ $car->car_name }} yang ada di website https://yazeholidays.com/&phone=+6281222802130">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section id="section-img-with-tab">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">

                    <h2>Only Quality For Clients</h2>
                    <div class="spacer-20"></div>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Luxury</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comfort</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Prestige</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>We offer a meticulously curated collection of the most sought-after luxury vehicles on the market. Whether you prefer the sporty allure of a high-performance sports car, the sophistication of a sleek and luxurious sedan, or the versatility of a premium SUV, we have the perfect car to match your discerning taste.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That's why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>We understand that prestige goes beyond luxury. It's about making a statement, embracing sophistication, and indulging in the finer things in life. That's why we offer an exclusive selection of prestigious cars that exude elegance, style, and status.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="image-container col-md-6 pull-right" data-bgimage="url(images/background/5.jpg) center"></div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2>Explore the world with comfortable car</h2>
                    <div class="spacer-20"></div>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-trophy de-icon mb20"></i>
                    <h4>First Class Services</h4>
                    <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-road de-icon mb20"></i>
                    <h4>24/7 road assistance</h4>
                    <p>Reliable support when you need it most, keeping you on the move with confidence and peace of mind.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-pin de-icon mb20"></i>
                    <h4>Free Pick-Up & Drop-Off</h4>
                    <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="section-testimonials" class="no-top no-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                I have been using Rentaly for my Car Rental needs for over 5 years now. I have never had any problems with their service. Their customer support is always responsive and helpful. I would recommend Rentaly to anyone looking for a reliable Car Rental provider.
                                <span class="by">Stepanie Hutchkiss</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                We have been using Rentaly for our trips needs for several years now and have always been happy with their service. Their customer support is Excellent Service! and they are always available to help with any issues we have. Their prices are also very competitive.
                                <span class="by">Jovan Reels</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/2.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                Endorsed by industry experts, Rentaly is the Car Rental solution you can trust. With years of experience in the field, we provide fast, reliable and secure Car Rental services.
                                <span class="by">Kanesha Keyton</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/3.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <section id="section-news">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Latest News</h2>
                    <p>Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest news, insights, and analysis.</p>
                    <div class="spacer-20"></div>
                </div>

                @foreach($articles as $article)
                <div class="col-lg-4 mb10">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">10</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="{{ Storage::url($article->image) }}" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">{{ $article->title }}<span></span></a></h4>
                                <p>Author : {{ $article->writer }}</p>
                                <a class="btn-main" href="{{ route('article.detail', $article) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="section-fun-facts" class="bg-color text-light">
        <div class="container">
            <div class="quotes">
                "A good trip will provide memories and <br>
                an unforgettable experience"
                <p>- Yaze Holidays -</p>
            </div>
        </div>
    </section>

    <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#181818">
        <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list">
                <div class="d-item">
                    <span class="d-item-txt">Hiace</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Travel</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Crossover</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Convertible</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Avanza</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Touring</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Innova</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Snacks</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Paradise</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sea</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Mountain</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Historical Buildings</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                </div>
            </div>

            <div class="de-marquee-list">
                <div class="d-item">
                    <span class="d-item-txt">Hiace</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Travel</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Crossover</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Convertible</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Avanza</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Touring</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Innova</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Snacks</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Paradise</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sea</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Mountain</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Historical Buildings</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->
@endsection