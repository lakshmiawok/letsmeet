<?php // print_r($result);exit;?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div>
<!-- <a href="<?=base_url()?>ChatController/logout" style="padding: 5px;background-color: green;color:white;float:right;">Logout</a> -->
</div>
<div style="height: 400px;border:1px solid grey;overflow-y: scroll;" id="msg_area">


</div>
<div>
	<form id="form">
	<textarea id="typing" name="typing" style="width:1300px;border:1px solid grey;resize: none;" class="form-control"></textarea>

	<input type="text" name="receiver" id="receiver" value="<?=$email?>">
	<!-- <?php foreach ($result as $value) {
	// /echo $value->conversation_id;

}?> -->
	<input type="text" name="con_id" id="con_id" value="<?=$id?>">
	</form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script>
//var objDiv = document.getElementById("msg_area");
//objDiv.scrollTop = objDiv.scrollHeight;

$(document).ready(function(){

var id=<?=$id?>



	// $("#msg_area").load("http://127.0.0.1/chat/ChatController/display_msg/"+2,function(){

	// $('#msg_area').scrollTop($('#msg_area')[0].scrollHeight);
	// });

$("#form")[0].reset();


var receiver=$('#receiver').val();
var con_id=$('#con_id').val();
setInterval(function(){
$("#msg_area").load("http://127.0.0.1/chat/ChatController/display_msg/"+id,function(){
//$('#msg_area').scrollTop($('#msg_area')[0].scrollHeight);
});
},1500);

$("#msg_area").load("http://127.0.0.1/chat/ChatController/display_msg/"+id,function(){
	$('#msg_area').scrollTop($('#msg_area')[0].scrollHeight);
});

	$('#typing').keyup(function(e) {

	if(e.keyCode == 13){
//alert('13');

	var typing=$('#typing').val();

//console.log(typing + receiver);
//$("#form")[0].reset();
$.post('http://127.0.0.1/chat/ChatController/insert_msg/',{'typing':typing,'receiver':receiver,'con_id':con_id},function(data){

console.log(data);
	$("#form")[0].reset();



$("#msg_area").load("http://127.0.0.1/chat/ChatController/display_msg/"+id,function()
{


$('#msg_area').scrollTop($('#msg_area')[0].scrollHeight);

});

});
	  //$("#typing").reset();


}

	});





});

</script>




</body>
</html>







