<!DOCTYaE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
    <?php
    echo form_open('content/home');
    ?>
    <div>
        <p style="margin-left:3%;margin-top:3%">< Kioson</p>
        <hr>
    </div>
    <div style="text-align:center;margin-top:17%">
        <h4>Masukan Kode Verifikasimu</h4><br>
        <h8 style="color:grey">Kode OTP dikirim ke 081212365845 dan</h8><br>
        <h8 style="color:grey">agie@gmail.com</h8><br>
    </div>

    <div class="col-sm-12" style="text-align:center;margin-top:13%">
        <h1 style="color:grey">* * * * * *</h1>
        <h1 style="margin-top:-10%">_ _ _ _ _ _</h1>
    </div>
    <div class="col-sm-3 text-center"> 
        <button class="btn btn-md"style="margin-top:12%;width:75%"><h6 style="color:white;font-size:75%">MINTA OTP KEMBALI</h6></button><br>
        <button class="btn btn-md" type="submit" name="submit" style="margin-top:3%;background-color:orange;width:75%"><h6 style="color:white;font-size:75%">KONFIRMASI KODE</h6></button>
    </div>
    <div style="text-align:center;margin-top:10%">
        <h6 style="margin-top:5%;font-size:60%">Bantuan? <a href="#" style="margin-top:5%;color:orange">Customer Center</a></h6>
    </div>
    </body>
</html>