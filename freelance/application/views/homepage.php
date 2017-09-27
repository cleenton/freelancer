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
    <body style="background-color: #dee0e2; background-image: url(https://photo1.hotelsclick.com/maps/130857/map-best-western-mangga-dua-jakarta.png);">


<div class="col-md-12">
<div class="row">
<nav class="navbar" style="background-color:orange; border-radius:0 padding-left: 200px;">
<div class="container">  

    <h4 style="color: white; float: left">Saldo Rp. <?php foreach($data as $b){echo $b->saldo ;}?></h4>
    <button class="btn btn-dark" style="float:right;">isi Saldo +</button>

</div>
</nav>
</div>
</div>

<div class="container"> 
<div class="panel" style="text-align: center; margin-top: -20px;">
    <input type="text" name="" placeholder="Cari nama atau lokasi kios disini" style="width: 80%">
    <a><span class="fa fa-paper-plane" aria-hidden="true" style="color: orange;"></span></a>  
</div>

<div class="panel" style="text-align: center; margin-top: 90%;">
    <a><span class="fa fa-user-circle" aria-hidden="true" style="color: #dee0e2; width:50px; height: 50px;"></span></a>
    <?php foreach($data as $b){echo $b->name ;}?>
    <br>
    ID Freelancer : <?php foreach($data as $b){echo $b->id ;}?>
    <?php echo anchor('content/profile', 'kelola');  ?>
</div>

<div class="panel" style="text-align: center; margin-top: 10px;">
    <a><span class="fa fa-user-circle" aria-hidden="true" style="color: #dee0e2; width:50px; height: 50px;"></span></a>  
</div>

<div class="panel" style="text-align: center; margin-top: 10px;">
    <button class="btn btn-warning" style="width:80%; margin-top: 20px; margin-bottom: 20px;">Transfer Saldo</button>  
</div>
</div>

</div> 
    </body>
</html>



<!-- <?php

?> -->
