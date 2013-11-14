<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
			<h1><a href="<?php echo base_url(); ?>">Library System</a></h1>
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
						<h2 class="left">Daftar Buku</h2>
					</div>
					<!-- End Box Head -->	

                                        <table border="1">
                                            <tr>
                                                <td>No</td>
                                                <td>ID User</td>
                                                <td>Username</td>
                                                <td>Password</td>
                                                <td>Level</td>
                                                <td>Nama Lengkap</td>
                                                <td>Alamat</td>
                                                <td>Fakultas</td>
                                                <td>Jurusan</td>
                                                <td>Angkatan</td>
                                                <td>Semester</td>
                                                <td>Nim</td>
                                                <td>Telepon</td>
                                                <td>Action</td>
                                            </tr>
                                            <?php
                                            $no=1;
                                            foreach ($user->result() as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->id_user;?></td>
                                                <td><?php echo $row->username;?></td>
                                                <td><?php echo $row->password;?></td>
                                                <td><?php echo $row->level;?></td>
                                                <td><?php echo $row->nama_lengkap;?></td>
                                                <td><?php echo $row->alamat;?></td>
                                                <td><?php echo $row->fakultas;?></td>
                                                <td><?php echo $row->jurusan;?></td>
                                                <td><?php echo $row->angkatan;?></td>
                                                <td><?php echo $row->semester;?></td>
                                                <td><?php echo $row->nim;?></td>
                                                <td><?php echo $row->telepon;?></td>
                                                <td><a href="<?php echo base_url(); ?>index.php/user/viewUpdate/<?php echo $row->id_user; ?>"><span>Update</span></a>/<a href="<?php echo base_url(); ?>index.php/user/delete/<?php echo $row->id_user; ?>"><span>Delete</span></a></td>
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
