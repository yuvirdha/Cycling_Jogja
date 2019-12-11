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
  @include('include.icongrid')

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

    <div class="container">
      <div class="row">
        <div class="car p-4">
        <h2>CURRENT FORECAST</h2>
        <br>

        <h3 class="display-2"><?php echo $loc_current;?></h3>
        <pclass="display-2"><?php echo $icon;?></p>
        <h3 class="display-2"><?php echo $temperature_current;?> &deg;</h3>
        <h4 class="display-2"><?php echo $summary_current;?></h4>
        <h4 class="display-2">Humidity : <?php echo $humidity_current;?></h4>
        <h4 class="display-2">Wind Speed : <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr></h4>
        </div>  
      </div>
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
