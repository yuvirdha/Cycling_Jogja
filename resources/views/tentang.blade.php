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
  @include('include.navigation')
  @include('include.header')
  <div class="card">
  <br><br>

<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-6">
  </div>
  <div class="col-md-4">
  <h2 class="card-title">Tentang Web Kami</h2>
  <p class="card-text"></p>
  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
    <div class="features-icons-icon d-flex">
    Oracle. Merupakan sebuah tim yang terbentuk pada tahun 2019. Berdasarkan hasil kesepakatan dengan
    Dinas Pariwisata Provinsi DIY, kami berkesempatan untuk menciptakan sebuah aplikasi berbasis web dengan 
    label "Cycling Jogja".
    Persentase pendapatan Provinsi DIY di sektor pariwisata masih tergolong fluktuatif. Hal ini akan mempengaruhi
    stabilitas program pengembangan DIY, maka Dinas Pariwisata Yogyakarta mencanangkan kebijakan kerja untuk meningkatkan
    promosi dan pemasaran pariwisata.
Salah satu upaya peningkatan promosi dan pemasaran yang dilakukan, adalah dengan meluncurkan
program Joging Jogja. Program ini mengambil konsep location-based amazing race. Setiap bulan,
Dinas Pariwisata Jogja membuat sebuah rantai perjalanan yang ditujukan untuk anggota program
yang telah mendaftar. Rantai perjalanan ini menghubungkan tempat-tempat wisata di Jogja, warung-
warung kuliner di Jogja, serta kegiatan acara (event) yang sedang berjalan di Jogja. Masyarakat yang
mengikuti program ini, atau yang kemudian disebut sebagai Jagoan Jogja, akan dapat memulai
perjalanannya di waktu yang telah ditentukan oleh Dinas. Seorang Jagoan Jogja akan memulai
perjalanan dari startpoint. Dengan petunjuk yang diberikan melalui pesan yang muncul di halaman
anggota portal Joging Jogja, Jagoan Jogja menuju ke checkpoint berikut nya. Jagoan Jogja akan
diberikan tantangan kuis ketika sudah sampai di checkpoint berikutnya, dan akan mendapatkan
petunjuk ke checkpoint berikutnya jika dapat menyelesaikan tantangan kuisnya. Untuk checkpoint
yang berupa event, maka Jagoan Jogja harus mendatangi tempat tersebut di waktu saat event tersebut
diselenggarakan. Portal Jagoan Jogja dapat mengetahui lokasi Jagoan Jogja dari GPS yang tertanam
pada piranti pintar Jagoan Jogja.
    </div>
    </div>
  </div>
</div>
<br><br>
 
</div>


  @include('include.upcommingevent')
  @include('include.signup')
  @include('include.footer')
  @include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
