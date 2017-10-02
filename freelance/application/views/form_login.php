    <?php
	echo form_open('auth/login');
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
					<li role="presentation" class="active" style="font-family: 'Times New Roman', Times, serif"> 
						<a href="#" style="color: black"> MASUK </a> 
					</li>
				</div>
				<div class="div1 col-xs-6">
					<li role="presentation" style="font-family: 'Times New Roman', Times, serif"> 
						<a href="#"> <?php echo anchor('auth/form_register', 'DAFTAR'); ?>  </a> 
					</li>
				</div>
			</div>
		</div>
		<hr>
		
		<div style="margin: 0 7% 0 7%">
			<div style="margin-top: 15%">
				<h6 class="text2">NOMOR TELEPON / ID FREELANCER</h6>
				<input type="text" name="email" placeholder="Masukan Nomor Telepon disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			<div style="margin-top: 15%">
				<h6 class="text2">PASSWORD / KATA SANDI</h6>
				<input type="password" name="password" placeholder="Masukan Kata Sandi disini" style="border: none; width: 100%; font-size: 75%">
				<hr style="margin-top: 5%">
			</div>
			
			<div>
				<button class="btn btn-warning buttonwaris" type="submit" name="submit">MASUK</button>
				<h6 class="text3">Atau masuk melalui</h6>
				
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

				<div class="div3">
					<a style="color: black"> Lupa Password? </a>
					<a style="color: orange"> Disini </a>
				</div>

			</div>
		</div>
	</div>
    </body>
</html>
