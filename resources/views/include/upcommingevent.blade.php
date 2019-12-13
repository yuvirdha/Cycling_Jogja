

<div class="container">
        <div class="row">
        @foreach($events as $q)
           <div class="col-md-4 mb-5">
             <div class="card h-100">
               <img class="card-img-top"src="{{ url('/images/'.$q->gambar_event) }}" alt="Card image cap">
               <div class="card-body">
                 <h4 class="card-title">Ke Tugu, ok!</h4>
                 <p class="card-text">Bersepeda keliling Jogja memang seru. Banyak spot yang terlalu menarik untuk dihiraukan. Ayo, bersepeda dan jelajahi keindahannya.</p>
               </div>
             </div>
           </div>
             @endforeach
           </div>
         </div>
        

         <section class="testimonials text-center bg-light">
            <div class="container">
              <br>
              <h2 class="mb-5">Tim Oracle</h2>
              <div class="row">
                <div class="col-lg-3">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/virdha.jpg" alt="">
                    <h5>Yuvirdha Bektie W</h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/dilfa.jpeg" alt="">
                    <h5>Dilfa Salsabiela</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/laila.jpeg" alt="">
                    <h5>Laila Kusuma W</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid rounded-circle mb-3" src="img/avil.jpeg" alt="">
                      <h5>Avilia Kusumaputeri N</h5>
                      <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                  </div>
              </div>
            </div>
          </section>
         
      </div>
    </div>