<div class="container">

<!-- Page Heading -->
<h2 class="my-4">Event yang Akan Datang
  <small></small>
</h2>

<!-- Project One -->
<div class="card">
  <br><br>
@foreach($events as $q)
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ url('/images/'.$q->gambar_event) }}" alt="Card image cap">
    </a>
  </div>
  <div class="col-md-4">
  <h2 class="card-title">{{ $q->nama_event}}</h2>
  <p class="card-text">{{ $q->rincian_event}} </p>
  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
    <div class="features-icons-icon d-flex">
      <table>
        <tr>  
          <td><i class="far fa-calendar m-auto text primary" style="color:#F38230;"></i></td>
          <td> </td>
          <td><h6>{{ $q->waktu_pelaksanaan}}</h6></td>
        </tr>
        <tr>  
            <td><i class="fas fa-route m-auto text primary" style="color:#F38230;"></i></td>
            <td> </td>
            <td><h6>{{ $q->rute}}</h6></td>
          </tr>
          <tr>  
              <td><i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i></td>
              <td> </td>
              <td><h6>{{ $q->harga_tiket}}</h6></td>
            </tr>
      </table>
    </div>
    </div>
    <a class="btn btn-primary" style="background-color:#F38230; border-color:#F38230" href="/login">Gabung</a>
  </div>
</div>
<br><br>
  @endforeach
</div>

<br>
<br>
<br>


   <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-4.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Fully Responsive Design</h2>
          <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Updated For Bootstrap 4</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
      </div>
    </div>
  </section>
</div>

      <br><br><br>


</div>
   <section class="testimonials text-center bg-light">
      <div class="container">
        <br><br><br>
        <h2 class="mb-5">Tim Oracle</h2>
        <div class="row">
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/virdha.jpg" alt="">
              <h5>Yuvirdha Bektie W</h5>
              <p class="font-weight-light mb-0">18523147</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/dilfa.jpeg" alt="">
              <h5>Dilfa Salsabiela</h5>
              <p class="font-weight-light mb-0">18523054</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/laila.jpeg" alt="">
              <h5>Laila Kusuma W</h5>
              <p class="font-weight-light mb-0">18523010</p>
            </div>
          </div>
          <div class="col-lg-3">
              <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                <img class="img-fluid rounded-circle mb-3" src="img/avil.jpeg" alt="">
                <h5>Avilia Kusumaputeri N</h5>
                <p class="font-weight-light mb-0">18523174</p>
              </div>
            </div>
        </div>
      </div>
    </section>
   

</div>