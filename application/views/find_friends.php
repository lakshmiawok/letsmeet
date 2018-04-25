<!DOCTYPE html>
<html>
<head>
	<title>Find Friends</title>
</head>
<body>
<h1>Find Friends 	</h1>
<?php foreach ($find_friends as $find_friend) {
	?>
<div class="find_friends col-md-8 col-md-offset-2" style="height: 100px;border:1px solid grey;" >

<img class="col-md-2" src="<?=base_url()?><?php echo $find_friend->user_image ?>" style="height: 100px">
<br>
<div class="col-md-4">
<h4 ><?=$find_friend->fname . ' ' . $find_friend->lname?></h4>
<h5><span class="glyphicon glyphicon-globe"></span>&nbsp;<?=$find_friend->city?></h5>
</div>
<div class="col-md-2 pull-right">

<?php //echo "<pre>";
	// 	print_r($req_sents);exit;   ?>
<a class=" btn btn-primary" href="<?=base_url()?>ChatController/friend_request/<?=$find_friend->email?>">Add Friend</a>


</div>
</div>
<?php }?>
</body>
</html>