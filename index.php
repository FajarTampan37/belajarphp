<!DOCTYPE html>

<html>
	<head>
		<title> Fajar Akbar Website </title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- Menggunakan CSS-->
		<link href="style.css" rel="stylesheet"  >
	</head>
	<body >
			<section>
				 <nav >
					 <div class="toggle">
						 <button onclick="menu_open()" class="tombol tombol-navigasi">Menu</button>
					 </div>
					 <ul style="padding-top:20px;" id="menu-list"  >
						 <li><a href="#aboutme">About Me</a></li>
					 </ul>
				 </nav>
				 <div class="sosmed">
					 <div class="isi-sosmed">
						<a href="https://api.whatsapp.com/send?phone=6281336558035&text=Assalamualaikum" target="_blank"><img src="Whatsapp.png"></a>
						 <a href="https://www.instagram.com/fafajar37/" target="_blank"><img src="Instagram.png"> </a>
						 <a href="fafajar37@gmail.com" target="_blank"><img src="gmail.png"></a>
					 </div>
				 </div>

				 <div class="banner">
	         <center>
	            <div id="circle3"></div>
	            <div id="circle2"></div>
	            <div id="circle"></div>
	            <div class="title">
	               <h1 class="name">Hola, Perkenalkan Saya Fajar!</h1>
	               <p>Mahasiswa Matematika UIN MALANG, <br/> dan perusuh handal </p>
				</div>
	         </center>
	       </div>
				 <div id="aboutme">
				 </div>
				<!-- Start SVG Curve -->
				<svg  id="curve"
					   viewBox="0 0 1400 214.953"
					 xml:space="preserve">
				<path style="opacity:1;fill:;" d="M0,139.29C207.803,40.048,277.683-60.968,472.864,45.364
					c195.181,106.331,346.987,163.042,481.928,77.975c134.939-85.065,337.348-34.515,437.348,41.225c100,75.743,7.861,6.627,7.861,6.627
					v73.387H0V139.29z"/>
				</svg>
				<!-- End SVG Curve -->
			</section>
		<div id="wrapper">
			<section   class="sec2" >
	      <div class="content">
					<div >
	          <h1 class="title-content">About Me</h1>
	          <div class="left-menu">
							<div class="circle-avatar"></div>

	          </div>
	          <div class="right-menu">
							<p>
								P <br/> Perkenalkan saya adalah mahasiswa <i class="english">Matematika</i>, <p>Seorang pecinta Koeching, dan terkadang Suka ngerusuh</p>.
							</p>
							<p>
								Lahir pada bulan    <b class="important">Agustus</b> tanggal  <b class="important"> 27 </b> dan tahun    <b class="important">2002</b>, bertempat tinggal di    <b class="important"> Nganjuk </b>, Jawa Timur, Indonesia.
							</p>
							<p>
								Lahir di Kota    <b class="important">Pasuruan</b>, membuat Saya begitu menyukai <b class="important">Kehidupan NoLep</b> terlebih lagi dalam   <b class="important"> culture culture luar</b> yang berkembang begitu <b class="important">Pesat</b>.
	          </div>
					</div>
	      </div>

			</section>

		<div class="detail" id="modal-unsika">
			<div class="detail-sekolah" >
				<div class="header-detail">
					<h3>Universitas Islam Negeri Maulana Malik Ibrahim MAalang</h3>
					<a class="tombol tombol-close" href="#close">Close</a>
				</div>
				<div class="body-detail">
					<p>
						Mahasiswa Aktif Semester 5 Program Studi S1-Matematika pada tahun 2020.
					</p>
				</div>
			</div>
		</div>
<form>
<table id = "tabel">
       <tr>
         <td>Tulis komentar:</td>
         <td><textarea cols="50" rows="8"></textarea></td>
       </tr>
       <tr>
         <td><input type="submit" value="Postkan Komentar"/></td>
         <td><input type="reset" value="hapus"></td>
        </tr>
</table>
</form>
		<script type="text/javascript">
			function menu_open() {
				let menu_list = document.getElementById('menu-list');
				let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
				menu_list.className = " tampilkan";
				tombol_navigasi.setAttribute('onclick', 'menu_close()');
			}

			function menu_close() {
				let menu_list = document.getElementById('menu-list');
				let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
				menu_list.className = " hidden";
				tombol_navigasi.setAttribute('onclick', 'menu_open()');
			}
		</script>
	</body>
</html>