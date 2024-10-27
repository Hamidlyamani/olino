@extends('master')
@section('main')
    <!-- slider section -->

    <section class="slider_section">
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row hero_section SECTION1">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            OLINO: Where Fashion Finds its Pulse, Unveiling the Essence of Style.
                                        </h1>
                                        <p>
                                            Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non
                                            necessitatibus error
                                            distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio
                                            esse, possimus
                                            maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.
                                        </p>
                                        <a href="{{ route('contact') }}">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item2">
                        <div class="container-fluid">
                            <div class="row" style="    background-size: cover;">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            Welcome to OLINO <br> Where Fashion Meets Heart
                                        </h1>
                                        <p>
                                            Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non
                                            necessitatibus error
                                            distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio
                                            esse, possimus
                                            maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.
                                        </p>
                                        <a href="{{ route('contact') }}">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="img-box">
                                        {{-- <img src="images/slider-img.png" alt="" /> --}}
                                        <img src="images/kaftan.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <img src="images/line.png" alt="" />
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    <div class="carousel-inner Mobile_hero">
        <div class="carousel-item">
            <div class="container-fluid">
                <div class="row hero_section SECTION1">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <h1>
                                OLINO: Where Fashion Finds its Pulse, Unveiling the Essence of Style
                            </h1>
                            <p>
                                Explore the fusion of Moroccan heritage and modern flair in women's fashion at a destination
                                where tradition intertwines seamlessly with contemporary elegance.
                            </p>
                            <a href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">
                <x-product :products="$products" />
            </div>
            <div class="btn-box">
                <a href="/shop">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- end shop section -->

    <!-- saving section -->

    <section class="saving_section">
        <div class="box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="images/saving-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Best Savings on <br>
                                    new arrivals
                                </h2>
                            </div>
                            <p>
                                Experience extraordinary savings with our latest arrivals! Uncover unbeatable discounts
                                on
                                fresh, trendsetting items that redefine style.
                                Don't miss out on the best deals as you elevate your wardrobe and home with the newest
                                and
                                most coveted selections.
                            </p>
                            <div class="btn-box">
                                <a href="shop" class="btn1">
                                    Buy Now
                                </a>
                                <a href="/contact" class="btn2">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end saving section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    why choose us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">

                            <img src="images/x1 (1).png" alt="">

                        </div>
                        <div class="detail-box">
                            <h5>
                                Premium Craftsmanship
                            </h5>
                            <p>
                                Exemplifying unparalleled quality, our Premium Craftsmanship reflects meticulous
                                attention
                                to detail and expert artistry, elevating each creation to the pinnacle of refined
                                excellence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/x1 (3).png" alt="">

                        </div>
                        <div class="detail-box">
                            <h5>
                                Free Shiping
                            </h5>
                            <p>
                                Indulge in seamless shopping with our Free Shipping service, delivering convenience to
                                your
                                doorstep without additional costs. Elevate your experience with hassle-free,
                                door-to-door
                                delivery.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/x1 (2).png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Best Quality
                            </h5>
                            <p>
                                Discover the epitome of excellence with our products, meticulously curated for the Best
                                Quality. Unparalleled craftsmanship and premium materials converge to redefine your
                                standards of luxury and satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->


    <!-- gift section -->

    <section class="gift_section layout_padding-bottom">
        <div class="box ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="images/gifts.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Gifts for your <br>
                                    loved ones
                                </h2>
                            </div>
                            <p>
                                Discover thoughtful gifts for your loved ones that speak volumes of affection. From
                                elegant
                                surprises to personalized treasures, find the perfect way to express your love. Make
                                every
                                moment special with our curated selection of heartfelt gifts.

                            </p>
                            <div class="btn-box">
                                <a href="#" class="btn1">
                                    Buy Now
                                </a>
                                <a href="#" class="btn2">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end gift section -->


    {{-- <!-- contact section -->

    <section class="contact_section ">
        <div class="container px-0">
            <div class="heading_container ">
                <h2 class="">
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-7 col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 px-0">
                    <form action="#">
                        <div>
                            <input type="text" placeholder="Name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="d-flex ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section --> --}}

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Témoignages En Or : Échos Authentiques de la Satisfaction de Nos Clients
                </h2>
            </div>
        </div>
        <div class="container px-0">
            <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Salma Erachide
                                    </h5>
                                    <h6>
                                        Marrakech
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Une expérience d'achat exceptionnelle ! La variété de produits est incroyable, et la
                                qualité
                                est toujours au rendez-vous. J'ai trouvé exactement ce que je cherchais, et la livraison
                                a
                                été rapide. Bravo à l'équipe !
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Fatima dilami
                                    </h5>
                                    <h6>
                                        Rabat
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                J'adore ce magasin ! Les articles sont uniques, le service client est exemplaire, et les
                                prix sont très compétitifs. Mes commandes ont toujours été impeccables, et je recommande
                                vivement à tous mes amis.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Aya Lwahbi
                                    </h5>
                                    <h6>
                                        Essaouira
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                C'est mon magasin préféré ! Les produits sont non seulement magnifiques mais aussi
                                durables.
                                Chaque achat a été une expérience agréable, et je suis toujours impressionné par
                                l'attention
                                aux détails. Une entreprise de confiance que je recommande les yeux fermés.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->
@endsection
