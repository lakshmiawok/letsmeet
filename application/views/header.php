<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper col-md-12 bg-light" >
<div class="header col-md-12" style="height: 100px;">
	<div class="logo col-md-3" >
		<a href="<?=base_url()?>ChatController/home"> <img src="<?=base_url()?>assets/logo/logo1.png" style="height: 100px;width:200px;"></a>
	</div>
	<!-- <div class="companyname col-md-1" style="height: 50px;">
		<h3><a href="<?=base_url()?>ChatController/home">Lets Chat</a></h3>
		 </div> -->
<div class="col-md-5" style="height: 50px;top:25px;">

	<span><input type="text" name="" size="50px" style="margin-top: 2px;padding:10px;"></span>

</div>
		 <div class="friend_request col-md-1 " style="height: 50px;top:30px;">
		 	<a href="<?=base_url()?>ChatController/get_friend_req"><span class="glyphicon glyphicon-plus" style="font-size: 25px;"></span></a>
		 </div>
		 <div class="notification col-md-1" style="height: 50px;top:30px;">
		 	<a href="<?=base_url()?>ChatController/messenger/"> <span class="glyphicon glyphicon-comment" style="font-size: 25px;"></span></a>
		 </div>
		 <div class="message col-md-1" style="height: 50px;top:30px;">

		 <a href=""><span class="glyphicon glyphicon-globe" style="font-size: 25px;"></span></a>
		 </div>
		 <div class="profile col-md-1" style="height: 50px;top:20px;">


		 	<div class="dropdown">
		 		<!-- <span class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown"></span> -->
		 		<img src="<?=base_url()?><?=$this->session->userdata('image')?>" dropdown-toggle" data-toggle="dropdown" height=45 style="border-radius:50%;cursor:pointer;"><span class="glyphicon glyphicon-triangle-bottom" style="font-size:10px;cursor: pointer" dropdown-toggle" data-toggle="dropdown"></span>
		 	  <!-- <p class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
		 	  <span class="caret"></span></button> -->
		 	  <ul class="dropdown-menu">
		 	    <li><a href="<?=base_url()?>ChatController/profile_details/<?=$this->session->userdata('id')?>/<?=$this->session->userdata('email')?>">Profile</a></li>
		 	    <li><a href="<?=base_url()?>ChatController/get_friend_req">Friend Requests</a></li>
		 	    <li><a href="<?=base_url()?>ChatController/settings/">Settings</a></li>
		 	    <li><a href="<?=base_url()?>ChatController/logout">Logout</a></li>
		 	  </ul>
		 	</div>
		 </div>
</div>
