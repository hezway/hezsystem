<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Tambah buku</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/css1/style.css'; ?>"> 
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Library System</a></h1>
			<div id="top-navigation">
				Welcome <?php echo $this -> session ->userdata('username') ;?>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="c_login/logout">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="home"><span>Registrasi</span></a></li>
			    <li><a href="tambah" class="active"><span>Form tambah buku</span></a></li>
			    <li><a href="pinjam"><span>Form peminjaman buku</span></a></li>
			    <li><a href="kembali"><span>Form kembalikan buku</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		
		
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Form tambah buku</h2>
					</div>
					<!-- End Box Head -->
					
<?php echo form_open('buku/tambah'); ?>
<label for='judul_buku'> Judul Buku : </label> <input type='text' name='judul_buku' size='50' id='judul_buku'>
</br>
</br>
<label for='nama_penulis'> Nama Penulis : </label> <input type='text' name='nama_penulis' size='50' id='nama_penulis'>
</br>
</br>
<label for='id_buku'> Id Buku : </label> <input type='text' name='id_buku' size='50' id ='id_buku'>
</br>
</br>
<label for='tahun_terbit'> Tahun Terbit : </label> <input type='text' name='tahun_terbit' size='50' id='tahun_terbit'>
</br>
</br>
<label for='status'>Status : </label> <input type='text' name='status' size='50' id='status'>
</br>
</br>
<label for="submit">
<input type="submit"value="Submit" /> <label > <input type="reset" name="reset" value="Reset"/>
<?php form_close(); ?>
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Kotak Saran</h2>
					</div>
					<!-- End Box Head-->
					
					
					
					<div class="box-content">
						<a href="#" class="add-button"><span>Berikan Saran</span></a>
						<div class="cl">&nbsp;</div>
						
					</div>
                                        
                                        <div class="box-head">
						<h2>Daftar Buku</h2>
					</div>
					<!-- End Box Head-->
					
					
					
					<div class="box-content">
                                            <a href="<?php echo base_url(); ?>index.php/buku/daftarBuku" class="add-button"><span>Lihat Daftar Buku</span></a>
						<div class="cl">&nbsp;</div>
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="center">&copy; 2012 - hezsystem | Developer by hezsystem | Design by Chocotemplates.com</span>
		</span>
	</div>
</div>
<!-- End Footer -->
</body>
</html>