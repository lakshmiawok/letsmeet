<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="col-md-7">
		<img src="<?=base_url()?>assets/logo/forgottext.png" style="height: 250px;position: relative;top: 150px;">
	</div>
	<div class="col-md-3 " style="height: auto;position: relative;top:100px;">
		<img src="<?=base_url()?>assets/logo/logo1.png" style="height: 150px;">
	<form method="post" action="<?=base_url()?>ChatController/forgot_password_action">
		<br><br>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" style="border:1px solid grey;" required="required">
		</div>

		<div class="form-group">
			<label></label>
			<input type="submit"  value="Submit" class="form-control" style="border:1px solid grey;background-color: #08BCFC;color: white;">
		</div>
<p class="pull-right"><a href="<?=base_url()?>ChatController/index" style="color: #08BCFC">Sign in</a></p>
	</form>


	</div>
</body>
</html>