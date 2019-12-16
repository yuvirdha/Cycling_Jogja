<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja</title>

  <!-- Bootstrap core CSS -->
<link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('https://fonts.googleapis.com/css')}}"family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{url('css/landing-page.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<script src="https://kit.fontawesome.com/9845349ab7.js" crossorigin="anonymous"></script>

</head>

<body>
@include('include.navbefsign')
  @include('include.header')
  <div class="card">
  <br><br>

<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-6">
  </div>
  <div class="col-md-4">
  <h2 class="card-title">Frequently asked questions
</h2>
  <p class="card-text"></p>
  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
    <div class="features-icons-icon d-flex">
   Ticket
   <br>
    Bagaimana saya bisa mendapatkan tiket untuk mengikuti event ini?
    <br>
    Anda bisa melakukan login atau register lalu pilih menu agenda, disana ada event yang bisa anda ikuti.
    <br>
    <br>
    Apakah anak kecil dibawah 10 tahun boleh mengikuti acara ini?
    <br>
    Demi keamanan, peserta Cycling Jogja diperuntukkan anak-anak diatas 15 tahun dan dewasa dibawah 60 tahun.
    <br>
    <br>
    Apakah ada harga spesial bagi turis asing?
    <br>
    Harga sama, baik untuk masyarakat lokal maupun turis asing.
    <br>
    <br>
    Bagaimana metode pembayaran yang ditawarkan?
    <br>
    Kami belum melayani pembayaran online maupun transfer. Hanya dapat dilakukan pembayaran on the spot.
    <br>
    <br>
    Apakah Cycling Jogja hanya menyediakan pemesanan tiket secara online melalui web?
    <br>
    Ya. Kami tidak melayani pembelian on the spot.
    </div>
    </div>
  </div>
</div>
<br><br>
 
</div>

  @include('include.upcommingeventbef')

  @include('include.footer')
 

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
