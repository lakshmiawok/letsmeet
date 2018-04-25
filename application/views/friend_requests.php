<!DOCTYPE html>
<html>
<head>
	<?php /*echo "<pre>";
print_r($friend_requests);exit;*/?>
	<title>Friend Requests</title>
</head>

	<br><br>

	<?php foreach ($friend_requests as $frnd_request) {
	?>
<?php if ($frnd_request->friend_status == 'FRIEND') {?>

	<?php } else {
		?>
<div class="friend_requests col-md-8 col-md-offset-2" style="border:1px solid grey; height: 100px;">

<div class="col-md-2">

	<img src="<?=base_url() . $frnd_request->user_image?>" style="height: 100px">
</div>
<br>
<div class="col-md-4">

	<h4><a href=""><?=$frnd_request->fname . ' ' . $frnd_request->lname?></a></h4>
	<h5><span class="glyphicon glyphicon-globe"> <?=$frnd_request->city?></h5>
</div>
<div class="col-md-2 pull-right">

	<!-- <a href="<?=base_url()?>ChatController/friend_request_action/<?=$frnd_request->email . '/' . $frnd_request->conversation_id?>" class="btn btn-primary ">Confirm</a> -->
	 <div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Action
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="<?=base_url()?>ChatController/friend_request_action/<?=$frnd_request->email . '/' . $frnd_request->conversation_id?>">Confirm</a></li>
	    <li><a href="<?=base_url()?>ChatController/delete_frnd_request/<?=$frnd_request->email . '/' . $frnd_request->conversation_id?>">Delete</a></li>

	  </ul>
	</div>
	</div>
</div>
<?php }}?>

</html>