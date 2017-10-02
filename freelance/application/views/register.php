	<?php
	echo form_open('auth/register');
	?>

	<!-- Header -->
	<div>
		<h6 style="margin: 5%; font-family: 'Times New Roman', Times, serif">< Kioson</h6>
		<img src="https://www.kioson.com//assets/images/kcp/KCP-KHOERON.png"alt="" width="100%" height="150px">
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
<form action="<?php echo base_url('otp/sendmsg')?>" method="post">
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
			<div>
				<?php echo form_error('handphone', '<span class="text-danger">','</span>') ?>
			</div>
			
			<div style="margin-top: 15%">
				<h6 class="text2">KIRIM PESAN</h6>
				<input type="text" name="message" placeholder="Pesan" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div>
				<?php echo form_error('message', '<span class="text-danger">','</span>') ?>
			</div>

			<div style="margin-top: 15%">
				<h6 class="text2">ALAMAT EMAIL (PILIHAN)</h6>
				<input type="text" name="email" placeholder="Masukan alamat email disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div style="margin-top: 15%">
				<h6 class="text2">PASSWORD</h6>
				<input type="password" name="password" placeholder="Masukan Kata Sandi disini" style="border: none; width: 100%; font-size: 75%">
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
</form>
		
				
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
	</div>
</body>
</html>
