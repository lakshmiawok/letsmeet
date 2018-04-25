<h1><?=$this->session->userdata('name')?>  Friends</h1>
<?php //echo "<pre>";
//print_r($friends);exit; ?>
<?php foreach ($friends as $friend) {
	?>
<div class="col-md-8 col-md-offset-2" style="border:1px solid grey;height: 100px;">

<div class="col-md-2">
	<img src="<?=base_url() . $friend->user_image?>" style="height: 100px;">
</div>
<br>
<div class="col-md-2">
	<h4><?=$friend->fname . ' ' . $friend->lname?></h4>
	<h5><span class="glyphicon glyphicon-globe"> <?=$friend->city?></h5>
</div>
<br>
<div class="col-md-2 pull-right">
<!-- <a href="<?=base_url()?>ChatController/chat_msg/<?=$friend->email . '/' . @$friend->conversation_id?>" class="btn btn-primary">Message</a> -->
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-ok"> </span> Friends
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="<?=base_url()?>ChatController/chat_msg/<?=$friend->email . '/' . @$friend->conversation_id?>">Message</a></li>
    <li><a href="#">Unfriend</a></li>

  </ul>
</div>
	</div>

</div>

<?php }?>