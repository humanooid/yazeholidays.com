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
                    <img src="images/logo.png" alt="" style="width: 100px" class="mb-1">
                    <h4><span class="id-color">Yaze Holidays | Rencanakan Liburan</span></h4>
                    <a href="whatsapp://send?text=Hallo admin !, saya ingin bertanya mengenai rental mobil yang ada di website https://yazeholidays.com/&phone=+6281222802130">
                        <img class="whatsapp-icon" src="images/whatsapp.png" alt="" style="position:fixed; width: 70px; bottom:0px; right:0px; margin-right: 50px; margin-bottom: 60px; z-index: 99">
                    </a>
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

    <section id="section-cars" class="no-top no-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Armada yang kami miliki</h2>
                    <p>Mewujudkan impian Anda dengan armada kendaraan serbaguna yang luar biasa untuk perjalanan tak terlupakan.</p>
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

            </div>
        </div>
    </section>

    <section id="services" class="no-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center">
                    <h2>Layanan kami</h2>
                    <p>Beberapa layanan yang kami sediakan diantaranya adalah : </p>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images_1.jpg" alt="" style="width: 285px; height:185px; object-fit: cover; border-radius: 5px;">
                                    <div class="card-title p-3">
                                        Sewa Transportasi Bandung - Jakarta PP
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images_2.jpg" alt="" style="width: 285px; height:185px; object-fit: cover; border-radius: 5px;">
                                    <div class="card-title p-3">
                                        Drop Bandung - Airport Soetta & Drop Airport Soetta - Bandung
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images.jpg" alt="" style="width: 285px; height:185px; object-fit: cover; border-radius: 5px;">
                                    <div class="title p-3">
                                        Sewa Transportasi City Tour Bandung, Jakarta
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images_4.jpg" alt="" style="width: 285px; height:185px; object-fit: cover; border-radius: 5px;">
                                    <div class="title p-3">
                                        Sewa Transportasi Bandung - Pangandaran, Jogja,
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images_5.jpg" alt="" style="width: 285px; height:185px; object-fit:cover; border-radius: 5px;">
                                    <div class="title p-3">
                                        Drop Bandung - Bandara Kertajati
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/services/images_6.jpg" alt="" style="width: 285px; height:185px; object-fit:cover;">
                                    <div class="title p-3">
                                        Drop Bandara Kertajati - Bandung
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="section-img-with-tab">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">

                    <h2>Team Yaze Holidays</h2>
                    <div class="spacer-20"></div>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Senyum</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Salam</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sapa </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>Ketika Anda memasuki kantor Yaze Holidays atau berbicara dengan tim kami melalui telepon, Anda akan selalu disambut oleh senyum hangat. Senyum adalah bahasa universal yang tidak mengenal batas, dan kami memahami bahwa senyum dapat meredakan stres perjalanan dan membuat pelanggan merasa dihargai. Di Yaze Holidays, senyum adalah bagian dari identitas kami, dan kami menggunakannya untuk menciptakan atmosfer yang ramah dan mengundang dalam setiap interaksi dengan pelanggan.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>Memberikan salam yang ramah adalah salah satu nilai inti kami. Ketika Anda menghubungi Yaze Holidays, Anda akan selalu mendengar sapaan hangat yang memperlihatkan penghormatan terhadap keberadaan Anda. Salam kami adalah cara untuk menyambut Anda dalam perjalanan liburan Anda dan memberikan keyakinan bahwa Anda telah memilih mitra perjalanan yang peduli. Di Yaze Holidays, kami yakin bahwa salam adalah pintu pertama menuju pengalaman liburan yang tak terlupakan.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>Ketika Anda bepergian bersama Yaze Holidays, Anda akan merasakan kehangatan dan perhatian dalam setiap aspek perjalanan Anda. Kami selalu berusaha untuk mengenal pelanggan kami secara pribadi, mendengarkan kebutuhan mereka, dan memberikan sapaan yang melekat dalam hati. Sapaan kami bukan hanya kata-kata, tetapi ekspresi dari komitmen kami untuk menjadikan setiap perjalanan Anda menjadi pengalaman yang istimewa.</p>
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
                    <h2>Jelajahi dunia dengan mobil yang nyaman</h2>
                    <div class="spacer-20"></div>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-trophy de-icon mb20"></i>
                    <h4>Layanan 24 Jam</h4>
                    <p>Demi memaksimalkan layanan bagi pelanggan, jadwal kami buka hingga 24 jam.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-road de-icon mb20"></i>
                    <h4>Harga Terbaik</h4>
                    <p>Demi kepuasan pelanggan, maka kami memberikan harga terbaik bagi Anda.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-pin de-icon mb20"></i>
                    <h4>Rekomendasi Tempat Wisata Terbaik</h4>
                    <p>Kami merekomendasikan tempat wisata terbaik bagi Anda, dan wajib dikunjungi tiap hari nya.</p>
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

    <section id="section-news" class="p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Kabar Tebaru</h2>
                    <p>Berita terkini, perspektif segar, dan liputan mendalam - terus ikuti berita, wawasan, dan analisis terbaru kami.</p>
                    <div class="spacer-20"></div>
                </div>

                @foreach($articles as $article)
                <div class="col-lg-4 mb10">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">7</div>
                                    <div class="d">NOV</div>
                                </div>
                                <img alt="" src="{{ Storage::url($article->image) }}" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4>
                                    <div class="one-line-group">
                                        <a href="news-single.html" class="one-line">{{ $article->title }}<span></span></a>
                                    </div>
                                </h4>
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