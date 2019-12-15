<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <!-- Styles -->
    </head>
    <body>
        @include('include.navbefsign')
        @include('include.header')
        @include('include.icongridbef')
        <br>
<div class="container">
        <div class="row">
            @foreach($sepedas as $s)
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                  <img class="card-img-top" width="150px" src="{{ url('/images/'.$s->gambar_sepeda) }}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Merk Sepeda : {{ $s->jenis}}</h4>
                    <table>
                      <tr>
                        <td>
                         <i class="fas fa-shopping-bag m-auto text primary" style="color:#F38230;"></i>
                       </td>
                       <td>
                        <p class="card-text">Tersisa</p>
                       </td>
                       <td>:</td>
                       <td>
                           <p class="card-text"> {{ $s->stock}}</p>
                       </td>
                      </tr>
                      <tr>
                         <td>
                             <i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i>
                            </td>
                            <td>
                             <p class="card-text">Harga</p>
                            </td>
                            <td>:</td>
                       <td>
                           <p class="card-text"> {{ $s->harga}}</p>
                       </td>
                      </tr>
                    </table>
                  </div>
                  <div class="card-footer">
                     <a href="/login" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Pesan</a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
</div>

      @include('include.upcommingeventbef')
        @include('include.footer')

            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
    </body>
</html>
