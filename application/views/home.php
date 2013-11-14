<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
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
			    <li><a href="home" class="active"><span>Registrasi</span></a></li>
			    <li><a href="tambah"><span>Form tambah buku</span></a></li>
			    <li><a href="pinjam"><span>Form peminjaman buku</span></a></li>
			    <li><a href="kembali"><span>Form pengembalian buku</span></a></li>
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
						<h2 class="left">Registrasi Anggota Baru</h2>
					</div>
					<!-- End Box Head -->	

				<pre>
<?php echo form_open('user/tambah');?>
ID User     : <input type="text" name="id_user" size=50/><br/>
Nama Lengkap: <input type="text" name="nama_lengkap" size=50/><br/>
Alamat	    : <input type="text" name="alamat" size=50/><br/>
Fakultas    : <input type="text" name="fakultas" size=50/><br/>
Jurusan	    : <input type="text" name="jurusan" size=50/><br/>
Angkatan    : <input type="text" name="angkatan" size=50/><br/>
Semester    : <input type="text" name="semester" size=50/><br/>
Nim         : <input type="text" name="nim" size=50/><br/>
Telepon     : <input type="text" name="telepon" size=50/><br/>
Level       : <input type="text" name="level" size=50/><br/>

<input type="submit" name="Submit" value="Submit"/> <input type="reset" name="reset" value="Reset"/>
<?php echo form_close(); ?>
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
						<h2>Daftar User</h2>
					</div>
					<!-- End Box Head-->
					
					
					
					<div class="box-content">
                                            <a href="<?php echo base_url(); ?>index.php/user/daftarUser" class="add-button"><span>Lihat Daftar User</span></a>
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