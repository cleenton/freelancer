<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
    <body>

    <div class="container">
    <div class="col-md-12 ">
    <div class="row">   
    <div class="navbar-header">
      <a class="navbar-brand">
        <img alt="Brand" src="https://www.kioson.com/assets/images/logo-kioson1.png" width="100" height="30">  
      </a>
    </div>
    <br>

 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active" style=" text-align : center"> 
              <img src="../assets/img/welcomingpage1.png">      
          <H3 style="font">Selamat Datang Freelancer!</H3>
          <hr>
          <H5 style="color : orange;">Terhubung dengan +19.000 Mitra kioson di lebih dari 300 Kota</H5>
          </div>

          <div class="item" style=" text-align : center">
          <img src="../assets/img/welcomingpage2.png">       
          <H3 style="font">Dapat Pemasukan Baru</H3>
          <hr> 
          <H5 style="color : orange;">Makin banyak interaksi dengan Kios makin untung berlimpah</h5>
          </div>

          <div class="item" style=" text-align : center">
          <img src="../assets/img/welcomingpage3.png">       
          <H3 style="font">Pegang Kendali Sesuka Anda</H3>
          <hr> 
          <H5 style="color : orange;">Cairkan koimisi dengan mudah dan aman serta kemampuan menghubungi kios</h5>
          </div>

  </div>


<hr>
<form class="form-inline">
<div style="float: left; padding-top: 15px;">
<a><?php echo anchor('content/home', 'Lewati');  ?></a>
</div>

<a style="float:right;  padding-top: 15px;" href="#myCarousel" data-slide="next">
          Selanjutnya
          <span class="sr-only">Next</span>
</a>
</form>