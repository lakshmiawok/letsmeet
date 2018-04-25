<?php

class ChatModel extends CI_Model {

	function msg_send() {
		return $this->db->insert('messages', $data);
	}

}
?>