<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
	
	<h1>Register</h1>

	<?php if ($this->session->flashdata('errors')): ?>
		<p><?php echo $this->session->flashdata('errors'); ?></p>
	<?php endif; ?>

	<?php if ($this->session->flashdata('success')): ?>
		<p><?php echo $this->session->flashdata('success'); ?></p>
	<?php endif; ?>

	<!-- <form action="<?php echo base_url(); ?>home/do_register" method="post"> -->
	<?php echo form_open(base_url().'home/do_register'); ?>
		<table>
			<tr>
				<td>Username</td>
				<td>
					<!-- <input type="text" name="username"> -->
					<?php echo form_input('username', ''); ?>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<!-- <input type="password" name="password"> -->
					<?php echo form_password('password', ''); ?>
				</td>
			</tr>
			<tr>
				<td>
					<!-- <input type="reset"> -->
					<?php echo form_input(array( 'type' => 'reset', 'value' => 'Reset' )); ?>
				</td>
				<td>
					<?php echo form_submit('save', 'Save'); ?>
					<!-- <input type="submit" value="save"> -->
				</td>

			</tr>
			
			
		</table>
	<?php echo form_close(); ?>
	<!-- </form> -->

</body>
</html>