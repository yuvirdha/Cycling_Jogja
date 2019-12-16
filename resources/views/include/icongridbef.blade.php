<section class="features-icons bg-light text-center">
  <div class="container card shadow">
    <div class="row"> 
      <div class="col-lg-2">
      </div>
      <div class="col-lg-2">
          <a href="/" style="text-decoration:none; color:#000000;">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
              <i class="far fa-calendar m-auto" style="color:#F38230;"></i> 
          </div>
         <h5>Agenda</h5>
        </div>
      </div>
    </a>
      <div class="col-lg-2">
          <a href="/cuacawelcome" style="text-decoration:none; color:#000000;">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
              <i class="fas fa-cloud-sun m-auto" style="color:#F38230";></i>
          </div>
          <h5>Cuaca</h5>
        </div>
      </div>
    </a>
      <div class="col-lg-2">
        <a href="" style="text-decoration:none; color:#000000;" data-toggle="modal" data-target="#loginModal">
      <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
        <div class="features-icons-icon d-flex">
            <i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i>
        </div>
        <h5>Tiket</h5>
      </div>
    </div>
    </a>
      <div class="col-lg-2">
          <a href="/sewasepedawelcome" style="text-decoration:none; color:#000000;">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
              <i class="fas fa-biking m-auto text primary" style="color:#F38230;"></i>
          </div>
          <h5>Sewa Sepeda</h5>
        </div>
      </div>
      </a>
    </div>
  </div>

  <!-- Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda belum masuk</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Ikuti event dan info lainnya seputar sepedaan di Jogja.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="{{ route('login') }}">Masuk</a>
      </div>
    </div>
  </div>
</div>

</section>