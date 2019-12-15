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
          <h4 style="color:white" class="lead mb-0">Kelembapan: <?php echo $humidity_current;?>%</h4>
          <h4 style="color:white" class="lead mb-0">Kecepatan Angin: <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr></h4>
        </div>
      </div>
    </div>
  </div>
    </section>


    <div class = "container">
    <div class="row">
      <?php
        $i=0;
        
        foreach($forecast->daily->data as $day):
        $average_temp = (round($day->temperatureHigh)+round($day->temperatureLow))/2;
      ?>
      <div class="col-12 cold-md-3">
        <div class="card p-4 mb-4">
          <h2 class="h4">
            <?php echo date("l", $day->time);?>
          </h2>
          <h3 class="display-4">
            <?php echo ($average_temp);?> &deg;
          </h3>
          <div class="d-flex justify-content-between">
              <p class="lead">
                  Hi <?php echo round($day->temperatureHigh); ?>&deg;
              </p>
              <p class="lead">
                Low  <?php echo round($day->temperatureLow); ?>&deg;
            </p>
          </div>
          <p class="lead m-0">
            <span class="sr-only">Humidity</span> <?php echo $day->humidity*100?>%
          </p>
        </div>
      </div>
    <?php
    $i++;
    if($i==5) break;
  endforeach;
    ?>
    </div>

<br>
<br>

  @include('include.upcommingevent')
  @include('include.signup')
  @include('include.footer')
  @include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
