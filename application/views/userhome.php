


<?php //foreach ($user_posts as $user_post) {?>

<div class="user_posts col-md-6 col-md-offset-3" style="border:1px solid grey;overflow-wrap: break-word;max-height: auto;">

<!-- <img src="<?=base_url() . $value->user_image?>" height="30 width='30' alt="img not found"> &nbsp;&nbsp;<?=$value->fname . ' ' . $value->lname?><p class="pull-right"><?=$mypost->posted_time?></p> -->
<br><br><?php //echo $user_post->post_upload;?>
<div class="like" style="height: 40px;margin-top: 10px;padding-top:15px;">
100&nbsp;<a  id="like" data-like_email="<?=$this->session->userdata('email')?>" data-like_post_id="" href="<?=base_url()?>ChatController/post_likes/<?=$this->session->userdata('email') . '/'?>">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like
        </a> |
        10&nbsp;<a href="<?=base_url()?>ChatController/post_dislikes/<?=$this->session->userdata('email') . '/'?>" class="">
          <span class="glyphicon glyphicon-thumbs-down"></span> Dislike
        </a> |
        25&nbsp;<a href="#" class="">
          <span class="glyphicon glyphicon-comment"></span> Comments
        </a>
</div>



</div>
<?php //}?>


