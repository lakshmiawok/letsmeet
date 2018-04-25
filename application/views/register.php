<!DOCTYPE html>
<html>
<head>
	<title>New User Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-7">
	<img src="<?=base_url()?>assets/logo/logo1.png" style="position: relative;top: 150px;height: 250px;width: 450px;margin-left:100px;">
</div>
<div class="col-md-4 " style="height: auto;position: relative;top:50px;">

<form method="post" action="<?=base_url()?>ChatController/register_action">
	<br>

	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="fname" id="fname" class="form-control" style="border:1px solid grey;" required="required">
	</div>

	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="lname" id="lname" class="form-control" style="border:1px solid grey;" required="required">
	</div>

	<div class="form-group">
		<label>Gender</label>
		<select name="gender" id="gender" class="form-control" style="border:1px solid grey;" required="required">
			<option value="">Select gender</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
		</select>
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" id="email" class="form-control" style="border:1px solid grey;" required="required">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" id="password" class="form-control" style="border:1px solid grey;"  required="required">
	</div>

	<!-- <div class="form-group">
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" id="confirm_password" class="form-control" style="border:1px solid grey;"  required="required">
	</div> -->

	<div class="form-group">
		<label></label>
		<input type="submit"  value="Register" id="submit" class="form-control" style="border:1px solid grey;background-color: #08BCFC;color: white;">
	</div>

</form>
<p class="pull-right">Already a member..? <span><a href="<?=base_url()?>ChatController/index">Sign in</a></span></p>

</div>
<div class="col-md-1"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

$('#submit').click(function(event) {
	/* Act on the event */

var fname=$('#fname').val();
if(fname == '')
{
	alert('empty');
}
});



});

</script>

</body>
</html>