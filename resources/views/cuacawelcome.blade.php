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
        @include('include.icongridbef')

<?php
    $coordinates = '-7.797068, 110.370529';
    $api_url='https://api.darksky.net/forecast/d6f661c85e106becf4cbd58a9047b3d3/'.$coordinates;
    $forecast = json_decode(file_get_contents($api_url));

    // echo '<pre>';
    // print_r($forecast);
    // echo '<pre>';

    $loc_current = $forecast->timezone;
    $temperature_current =round( $forecast->currently->temperature);
    $icon = $forecast->currently->icon;
    $summary_current = $forecast->currently->summary;
    $windspeed_current =round ($forecast->currently->windSpeed);
    $humidity_current = $forecast->currently->humidity*100;
    ?>



<section class="showcase">
  <div class="container">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text" style="background: linear-gradient(#f38230, #f33030);">
          <h2 style="color:white">Cuaca Hari Ini</h2>
          <p style="color:white" class="lead mb-0"><?php echo $loc_current;?></p>
          <p style="color:white" class="lead mb-0"><?php echo $icon;?></p>
          <font style="color:white" size="+7"><?php echo $temperature_current;?> &deg;</font>
          <h4 style="color:white" class="lead mb-0"><?php echo $summary_current;?></h4>
          <h4 style="color:white" class="lead mb-0">Kelembapan: <?php echo $humidity_current;?></h4>
          <h4 style="color:white" class="lead mb-0">Kecepatan Angin: <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr></h4>
        </div>
      </div>
    </div>
  </div>
    </section>


<br>
<br>

        @include('include.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
