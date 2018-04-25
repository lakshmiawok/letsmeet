<div class="col-md-3" style="border:1px solid grey ;height: 550px;margin-top:2px;margin-bottom:2px;">
	<?php /*echo "<pre>";
print_r($friends);*/?>

	<?php foreach ($friends as $friend) {?>

		<h4 style="border-bottom: 1px solid grey;margin-top: 30px;" class="msg_head" data-convo_id="<?=$friend->conversation_id?>"   > <?=$friend->fname . ' ' . $friend->lname?></h4>
	<?php }?>
</div>


<div class="col-md-9 "  style="border:1px solid grey ;height: 550px;margin-top:2px;margin-bottom:2px;">
	<div class="messenger_header_options " style="height: 50px;border: 1px solid grey;"></div>
	<div class="message_display" id="messenger_area" style="height: 450px;border: 1px solid grey;overflow-y:scroll;"></div>
	<div class="typing_area">
		<textarea class="form-control"></textarea>
	</div>
</div>






<script type="text/javascript">

	$(document).ready(function(){

		$('.msg_head').click(function(){
			var convo_id = $(this).data("convo_id");

			$("#messenger_area").load("http://127.0.0.1/chat/ChatController/display_msg/"+convo_id)

		});

	});


</script>