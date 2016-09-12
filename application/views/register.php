<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	
	<!-- <form action="<?php echo base_url(); ?>home/do_register" method="post"> -->
	<?php echo form_open(base_url().'home/do_register'); ?>
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<input type="reset">
				</td>
				<td>
					<input type="submit" value="save">
				</td>

			</tr>
		</table>
	<?php echo form_close(); ?>
	<!-- </form> -->

</body>
</html>