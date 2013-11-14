<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Peminjaman buku</title>
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
			    <li><a href="tambah"><span>Form tambah buku</span></a></li>
			    <li><a href="pinjam" class="active"><span>Form peminjaman buku</span></a></li>
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
						<h2 class="left">Form peminjaman buku</h2>
					</div>
					<!-- End Box Head -->	
<table border="1">
                                            <tr>
                                                <td>No</td>
                                                <td>ID Buku</td>
                                                <td>Judul Buku</td>
                                                <td>ID User</td>
                                                <td>Nama Lengkap</td>
                       
                                                <td>Action</td>
                                            </tr>
                                            <?php
                                            $no=1;
                                            foreach ($data_table->result() as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->id_buku;?></td>
                                                <td><?php echo $row->judul_buku;?></td>                                               
                                                <td><?php echo $row->id_user;?></td>                                               
                                                <td><?php echo $row->nama_lengkap;?></td>                                               
                                                <td><a href="<?php echo base_url(); ?>index.php/user/setuju/<?php echo $row->id; ?>"><span>Setuju</span></a> / <a href="<?php echo base_url(); ?>index.php/user/tolak/<?php echo $row->id; ?>"><span>Tolak</span></a></td>
                                            </tr>
                                            <?$no++;}?>
                                        </table>
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