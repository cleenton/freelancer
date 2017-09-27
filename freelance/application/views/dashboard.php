<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=375, height=200">
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
        <style>

        
        .btn-warning{
            width : 100%;
            margin-bottom: 20px;
            background-color: #ffbfbf;
            border: 0px ;
            
        }
        .btn-danger{
            width : 100%;
            background-color: #ff8a4c;
            border: 0px ;
        }
        .warnatext1 {      
              color: #ff8a4c; 
            }
        .warnatext2 {      
            color: #ffbfbf; 
        }
        </style>
</head>
    <body>

   
    <div class="col-md-12 ">
    <div class="row">

    <div class="navbar-header">
      <a class="navbar-brand">
        <img alt="Brand" src="https://www.kioson.com/assets/images/logo-kioson1.png" width="100" height="30">  
      </a>
      <a class="navbar-brand fa fa-bars" style="color: orange; float: right;"></a>
    </div>

 
    <div class="container">
<H1 style="margin-top: 50px;">Jadilah Bagian Dari Perubahan Ekonomi Di Indonesia</H1>
<H5 style="margin-bottom: 50px;">Terhubung dengan +19.000 Mitra kioson</H5>



<nav class="panel" style="background-color:#35c7dd; border-radius:0 padding-left: 200px;border-radius: 10px;"> 
    <div class="container-fluid">
    <H6 style="color: white; text-align: center; margin-top: 20px; margin-bottom:20px;">Nikmati Manfaat Menjadi Freelancer Kioson</H6>
    <?php echo anchor('auth/login', '<button class="btn btn-warning"><h5 class="warnatext1">Masuk</h5></button>');  ?>
    </div>
</nav>

<div class="container">
<?php echo anchor('auth/form_register', '<button class="btn btn-danger"><h5 class="warnatext2">Daftar Freelancer</h5></button>');  ?>
</div>
</div>
</div>
</div>
    </body>
</html>
