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

		<style>

			.satu{
				position: absolute;
				background-color: white;
				border-radius: 10px;
				height: 660px;
				width: 90%;
				top: 35%;
				margin-left: 5%;
			}

			.buttonwaris{
				width:100%;
				font-family: 'Times New Roman', Times, serif; 
				font-size: 80%;
			}

			.text1{
				margin-top: -35%; 
				text-align: center; 
				color: white;
			}

			.div1{
				text-align: center; 
				margin-top: 5%; 
				margin-bottom: -5%
			}

			.text2{
				font-family: 'Times New Roman', Times, serif; 
				margin-bottom: 7%
			}

			.text3{
				font-family: 'Times New Roman', Times, serif; 
				text-align: center; 
				margin-top: 7%; 
				margin-bottom: 7%;
				font-size: 10px
			}

			.div2{
				margin-left: -12%; 
				margin-right: -12%
			}

			.button1{
				font-family: 'Times New Roman', Times, serif; 
				font-size: 12px; 
				text-align: right;
				margin-left: 5px; 
				width:110%
			}

			.button2{
				font-family: 'Times New Roman', Times, serif; 
				font-size: 12px; 
				text-align: right;
				margin-left: 5px; 
				width:110%
			}

			.div3{
				font-family: 'Times New Roman', Times, serif; 
				text-align: center; 
				margin-top: 7%; 
				font-size: 10px
			}

			.div4{
				font-family: 'Times New Roman', Times, serif; 
				text-align: center; 
				margin-bottom: 10%; 
				font-size: 10px
			}

		</style>

</head>
<body>
        
	<?php
	echo form_open('auth/register');
	?>

	<!-- Header -->
	<div>
		<h6 style="margin: 5%; font-family: 'Times New Roman', Times, serif">< Kioson</h6>
		<img src="https://www.kioson.com//assets/images/kcp/KCP-KHOERON.png"alt="" width="100%" height="227px">
		<h4 class="text1">#SaatnyaBerubah</h4>
	</div>

	<!-- Body -->
	<div class="satu">
		<div class="container-fluid">
			<div class="nav nav-pills col-xs-12 row">
				<div class="div1 col-xs-6">
					<li role="presentation" style="font-family: 'Times New Roman', Times, serif"> 
						<a href="#"> <?php echo anchor('auth/login', 'MASUK'); ?> </a> 
					</li>
				</div>
				<div class="div1 col-xs-6">
					<li role="presentation" class="active" style="font-family: 'Times New Roman', Times, serif"> 
						<a href="#" style="color: black"> DAFTAR </a> 
					</li>
				</div>
			</div>
		</div>
		<hr>

		<div style="margin: 0 7% 0 7%">
			<div style="margin-top: 15%">
				<h6 class="text2">NAMA LENGKAP</h6>
				<input type="text" name="username" placeholder="Nama Lengkap Anda" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div style="margin-top: 15%">
				<h6 class="text2">NOMOR PONSEL</h6>
				<input type="text" name="handphone" placeholder="Masukan nomor ponsel disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div style="margin-top: 15%">
				<h6 class="text2">ALAMAT EMAIL (PILIHAN)</h6>
				<input type="text" name="email" placeholder="Masukan alamat email disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div style="margin-top: 15%">
				<h6 class="text2">PASSWORD</h6>
				<input type="text" name="password" placeholder="Masukan Kata Sandi disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>

			<div>
				<div class="div3">
					<a style="color: black">Dengan mendaftar, saya setuju </a>
					<a style="color: blue">Syarat dan Ketentuan </a>
				</div>
				<div class="div4">
					<a style="color: black">serta </a>
					<a style="color: blue">Kebijakan Privasi </a>
					<a style="color: black">dari Kioson</a>
				</div>

				<button class="btn btn-warning buttonwaris" type="submit" name="submit">MASUK</button>
				<h6 class="text3">Atau Daftar Melalui</h6>
				
				<div class="container-fluid div2">
					<div class="col-xs-12 row">
						<div class="col-xs-6">
							<button class="btn button1" type="button" >Facebook</button>
						</div>
						<div class="col-xs-6">
							<button class="btn button2" type="button" >Gmail</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
