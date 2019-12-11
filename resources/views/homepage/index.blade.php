<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<script src="https://kit.fontawesome.com/9845349ab7.js" crossorigin="anonymous"></script>

</head>

<body>
  @include('include.navigation')
  @include('include.header')
  @include('include.icongrid')
  @include('include.profil')




        @foreach($event as $e)
        <div class="col-md-9">
                <div class="container">
                    <div class="row">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ url('/images/'.$e->gambar_event) }}" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title">{{ $e->nama_event}}</h2>
                          <p class="card-text">{{ $e->rincian_event}} </p>
                          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                              <div class="features-icons-icon d-flex">
                                <table>
                                  <tr>  
                                    <td><i class="far fa-calendar m-auto text primary" style="color:#F38230;"></i></td>
                                    <td> </td>
                                    <td><h6>{{ $e->waktu_pelaksanaan}}</h6></td>
                                  </tr>
                                  <tr>  
                                      <td><i class="fas fa-route m-auto text primary" style="color:#F38230;"></i></td>
                                      <td> </td>
                                      <td><h6>{{ $e->rute}}</h6></td>
                                    </tr>
                                    <tr>  
                                        <td><i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i></td>
                                        <td> </td>
                                        <td><h6>{{ $e->harga_tiket}}</h6></td>
                                      </tr>
                                </table>
                              </div>
                            <a href="/pemesanan/{{ $e->id}}" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Gabung</a>
                        </div>
                      </div>
                </div>
                

      </div>
    </div>
    @endforeach
  </div>
</div>
    
</div>

@include('include.upcommingevent')
@include('include.signup')
@include('include.footer')
@include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
