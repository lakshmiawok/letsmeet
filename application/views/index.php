<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="col-md-4 col-md-offset-4" style="height: 500px;position: relative;top:50px;">
<img src="<?=base_url()?>assets/logo/logo1.png">
<form method="post" action="<?=base_url()?>ChatController/login">
	<br><br>
	<div class="form-group">
		<label>Username / Email</label>
		<input type="email" name="username" class="form-control" style="border:1px solid grey;" required="required">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" style="border:1px solid grey;"  required="required">
	</div>

	<div class="form-group">
		<label></label>
		<input type="submit"  value="Login" class="form-control" style="border:1px solid grey;background-color: #08BCFC;color: white;">
	</div>

</form>














<p class="pull-left"><span><a href="<?=base_url()?>ChatController/forgot_password">Forgot Password</a></span></p>
<!-- 91212652467416033349121265246 -->
<p class="pull-right">Not a user..? <span><a href="<?=base_url()?>ChatController/register">Register Now</a></span></p>

</div>


</body>
</html>