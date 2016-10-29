<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<h1>Log-In</h1>
</head>
<body>
	<?php echo form_open(base_url().'home/do_login'); ?>
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
		</form>
</body>
</html>