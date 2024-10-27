@extends('master')
@section('main')
  <!-- contact section -->

<section class="why_section layout_padding">
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
                              
+01 12345678901  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
       Get in Touch: Contact Us for Assistance
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3401.288122613996!2d-9.760465681126147!3d31.516245658600777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1701049893663!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
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

  <!-- end contact section -->

@endsection