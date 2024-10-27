@extends('master')
@section('main')
    <section class="gift_section mt about ">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/olino.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Echoes of Moroccan Heritage Woven into Every Thread
                            </h2>
                        </div>

                        <p>

                            Discover Olino, where Moroccan tradition comes alive in every stitch, our name "Olino"
                            echoing the profound connection to artisanal craftsmanship.

                            More than a marketplace, Olino is a curated journey through time, sharing the timeless
                            allure of Moroccan fashion globally, each garment preserving intricate craftsmanship and
                            vibrant narratives.

                            <br>

                            Olino, beyond an e-commerce platform, is a cultural tapestry reflecting Morocco's rich
                            history. As the founder, my personal connection is a story of admiration, growing up
                            surrounded by the captivating traditions that instilled a profound love for the artistry
                            woven into traditional clothing.

                            <br>

                            Olino is my heartfelt endeavor to share this love globally. Join us on a captivating
                            journey, where every garment tells a unique story, and your purchase contributes to
                            preserving Morocco's extraordinary heritage.

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

    </section>
    <!-- why section -->

    <section class="why_section ourValues ">
        <div class="container">
            <div class="heading_container heading_center">

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">

                        <div class="detail-box">
                            <h5>
                                Our Values
                            </h5>
                            <p>


                                At Olino, cultural reverence is ingrained in our ethos, shaping every business facet
                                from garment design to customer interactions. Our celebration of artisanal dedication
                                extends to valuing the skill, time, and commitment invested by artisans who breathe life
                                into our collections. Rooted in inclusivity, Olino stands as a space that warmly
                                welcomes diversity, fostering a sense of belonging for all drawn to the rich tapestry of
                                Moroccan traditions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">

                        <div class="detail-box">
                            <h5>
                                Our Mission
                            </h5>
                            <p>

                                Olino's mission is to globally showcase the timeless beauty of Moroccan fashion,
                                safeguarding the intricate craftsmanship and vibrant stories woven into women's
                                traditional clothing. More than a marketplace, Olino is a cultural ambassador, dedicated
                                to fostering appreciation for the rich heritage of Morocco and connecting individuals
                                worldwide to its profound cultural tapestry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">

                        <div class="detail-box">
                            <h5>
                                Our Vision
                            </h5>
                            <p>



                                Olino dreams of a global celebration of Moroccan traditional clothing, envisioning a leading
                                platform that not only offers exquisite fashion but also acts as a bridge, connecting
                                individuals worldwide to the profound beauty and stories embedded in each garment. Our
                                vision extends beyond fashion, aiming to contribute to the preservation and enduring
                                appreciation of Morocco's extraordinary heritage for generations to come.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->
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
                                qualité est toujours au rendez-vous. J'ai trouvé exactement ce que je cherchais, et la
                                livraison a été rapide. Bravo à l'équipe !
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
                                durables. Chaque achat a été une expérience agréable, et je suis toujours impressionné
                                par l'attention aux détails. Une entreprise de confiance que je recommande les yeux
                                fermés.
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
        <section class="why_section ">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Contact Information
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">

                                <img src="images/a (2).png" alt="">

                            </div>
                            <div class="detail-box">
                                <h5>
                                    Email
                                </h5>
                                <p>
                                    Olino@gmail.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/a (3).png" alt="">

                            </div>
                            <div class="detail-box">
                                <h5>
                                    Adress
                                </h5>
                                <p>

                                    23 Tagaouaout Essaouira Ma</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/a (1).png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Phone
                                </h5>
                                <p>

                                    +01 12345678901 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    </section>
@endsection
