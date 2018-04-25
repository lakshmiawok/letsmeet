<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fileupload.css">
<script type="text/javascript" src="<?=base_url()?>assets/js/fileupload.js"></script>


<?php
foreach ($profile_details as $value) {

}

?>
	<title><?=$value->fname?> - profile</title>


<div class="wrapper col-md-12">
<div class="container col-md-8 col-md-offset-2" style="border:1px solid grey;height: auto;">
<br>
<div class="profile_image col-md-3" style="height: 150px;">

	<img src="<?=base_url()?><?=$value->user_image?>" style="height: 120px;width: 150px;">
	&nbsp;&nbsp;&nbsp;&nbsp;<a  id="change_dp" data-toggle="modal" data-target="#exampleModal">Change Profile picture</a>


<!-- /////////////////////////////////DP UPLOAD MODAL//////////////////////////////////////////////////////
 -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 300px;">



      	<div class="container file_container">
      	    <div class="row">
      	        <div class="col-md-4">
      	            <!-- image-preview-filename input [CUT FROM HERE]-->
      	            <form method="post" action="<?=base_url()?>ChatController/profile_pic_upload" enctype="multipart/form-data">
      	            <div class="input-group image-preview">

      	                <input type="text" class="form-control image-preview-filename" readonly="true"  style="width:370px !important;" name="user_pro_pic"> <!-- don't give a name === doesn't send on POST/GET -->
      	                <span class="input-group-btn">
      	                    <!-- image-preview-clear button -->
      	                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
      	                        <span class="glyphicon glyphicon-remove"></span> Clear
      	                    </button>
      	                    <!-- image-preview-input -->
      	                    <div class="btn btn-default image-preview-input">
      	                        <span class="glyphicon glyphicon-folder-open"></span>
      	                        <span class="image-preview-input-title">Browse</span>

      	                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
      	                    </div>
      	                </span>
      	            </div><!-- /input-group image-preview [TO HERE]-->
      	        </div>
      	    </div>
      	</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- ///////////////////////////////////DP UPLOAD MODAL CLOSE/////////////////////////////////////////// -->


</div>






<div class="profile_name col-md-9" style="height: 150px;">
	<h2><a href="<?=base_url()?>ChatController/profile_details/<?=$value->id . '/' . $value->email?>"><?=$value->fname . ' ' . $value->lname?></a></h2>

	<!-- <a id="edit_profile">Edit profile</a> --><a id="edit_profile">About</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">photos</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=base_url()?>ChatController/get_friends_list/<?=$this->session->userdata('email')?>">Friends</a>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=base_url()?>ChatController/find_friends/">Find Friends</a>
</div>
<div class="wrap">
<a  id="upload_image" data-email="<?=$value->email?>">Upload image</a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="upload_video" data-email="<?=$value->email?>">Upload video</a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="upload_post" data-email="<?=$value->email?>">New Post</a>

<!-- ////////////////////////////// POST BOX ///////////////////////-->

<div class="post_area" id="post_area" style="height: 87px;">
<form method="post" action="<?=base_url()?>ChatController/user_upload_posts" enctype="multipart/form-data">
	<input type="hidden" name="user_post_email" id="user_post_email" value="<?=$value->email?>">
<textarea class="post_text col-md-10 col-md-offset-1" id="post_text" name="post_text" rows=4 style="resize:none;" placeholder="What's in your mind..."></textarea>

<input type="submit" name="" id="post_submit" class="" style="">
</form>
</div>


<!-- /////////////////////////////////IMAGE BOX///////////////////////////////// -->


<div class="upload_image_area"  id="upload_image_area" style="border:1px solid grey;height:100px;display: none;">
	<br>
	<form method="post" action="<?=base_url()?>ChatController/user_upload_image" enctype="multipart/form-data">
	<input type="hidden" name="user_email" id="user_email_image">
	<input type="file" name="user_upload_image" id="user_upload_image">
	<input type="submit" >
	</form>
</div>


<!-- ///////////////////////////////VIDEO BOX ///////////////////////////////// -->


<div class="upload_video_area"  id="upload_video_area" style="border:1px solid grey;height:100px;display: none;">
	<br>
	<form method="post" action="<?=base_url()?>ChatController/user_upload_video" enctype="multipart/form-data">
	<input type="hidden" name="user_email" id="user_email_video" >
<input type="file" name="user_upload_video" id="user_upload_video">
<input type="submit" name="">
</form>
</div>
</div>
<br>

<?php //echo "<pre>";
//print_r($myposts);exit; ?>


<?php foreach ($myposts as $mypost) {
	?>
<div class="user_posts col-md-10 col-md-offset-1" style="border:1px solid grey;overflow-wrap: break-word;max-height: auto;">

<img src="<?=base_url() . $value->user_image?>" height="30 width='30' alt="img not found"> &nbsp;&nbsp;<?=$value->fname . ' ' . $value->lname?><p class="pull-right"><?=$mypost->posted_time?></p>
<br><br><?=$mypost->post_upload?>
<div class="like" style="height: 40px;margin-top: 10px;padding-top:15px;">

<?=@$mypost->likes_count?>&nbsp;<a  id="like" data-like_email="<?=$this->session->userdata('email')?>" data-like_post_id="<?=$mypost->post_id?>" href="<?=base_url()?>ChatController/post_likes/<?=$this->session->userdata('email') . '/' . $mypost->post_id?>">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like
        </a> |



        <?=@$mypost->dislikes_count?>&nbsp;<a href="<?=base_url()?>ChatController/post_dislikes/<?=$this->session->userdata('email') . '/' . $mypost->post_id?>" class="">
          <span class="glyphicon glyphicon-thumbs-down"></span> Dislike
        </a> | 
        25&nbsp;<a href="#" class="">
          <span class="glyphicon glyphicon-comment"></span> Comments
        </a>
</div>



</div>

<?php }?>
<div class="edit_profile_form" style="display: none;">
<form>
	<div class="form-group">
		<input type="text" name="">
	</div>
</form>
</div>


</div>

</div>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->

<script type="text/javascript">

$(document).ready(function(){

$('#upload_image').click(function(){
var email=$('#upload_image').data('email');
$('#user_email_image').val(email);
$('#upload_image_area').show();
$('#upload_video_area').hide();
$('#post_area').hide();
});

$('#upload_video').click(function(){
var email=$('#upload_video').data('email');
$('#user_email_video').val(email);
$('#upload_video_area').show();
$('#upload_image_area').hide();
$('#post_area').hide();
});

$('#upload_post').click(function(){
var email=$('#upload_post').data('email');
$('#user_post_email').val(email);
$('#post_area').show();
$('#upload_video_area').hide();
$('#upload_image_area').hide();
});

$('#edit_profile').click(function(){

$('.user_posts').hide();
$('.wrap').hide();
$('.edit_profile_form').show();

});

$('#like').click(function(){

var like_email=$('#like').data('like_email');
var like_post_id=$('#like').data('like_post_id');
// alert(like_post_id);alert(like_email);

});

$('#change_dp').click(function(){

//alert();

});

});
















</script>