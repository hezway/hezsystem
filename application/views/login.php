<html>
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title> Login </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/css/css/style.css'; ?>"> 
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: #e1c192 url(images/wood_pattern.jpg);
			}
		</style>
    </head>
    <body>
        <div class="container">
			
			<header>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
					
				</div>
			</header>
			
			<form class="form-2" method="POST" action="<?php echo base_url() ?>index.php/c_login/process_login ">
			
				
			
				
      			<section class="main">		
				 
					<h1><span class="log-in">Log in</span> </h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<?php echo form_input('username'); ?><br>
						<?php echo form_error('username', '<p class="field_error">', '</p>');?>
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<?php echo form_password('password'); ?><br>
						<?php echo form_error('password', '<p class="field_error">', '</p>');?>
					</p>
					<p class="clearfix"> 
				
						 <?php echo form_submit('Submit', 'Login'); ?> 
						
					</p>
				</form>​​
				<?php $message= $this->session->flashdata('err_message'); echo $message == '' ? '': '<p id="message">' . $message . '</p>' ;?>
				</form>
			</section>
			
        </div>
	
    </body>
</html>