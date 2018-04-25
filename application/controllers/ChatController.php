<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatController extends CI_Controller {

	function index() {

		$this->load->view('index.php');

	}
	public function home() {
		if ($this->session->userdata('username')) {

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id !=', $this->session->userdata('id'));
			$data['users'] = $this->db->get()->result();

			$this->load->view('header', $data);
			$this->load->view('userhome.php', $data);
			$this->load->view('footer', $data);
		} else {
			redirect('ChatController/index');
		}

	}

	function register() {
		$this->load->view('register');
	}

	function register_action() {

		$slug = $this->input->post('fname') . '-' . $this->input->post('lname');
		$token = md5(uniqid(rand(), true));
		$password = md5($this->input->post('password'));

		if ($this->input->post('gender') == 'male') {
			$pic = 'assets/images/male.png';

		} else {
			$pic = 'assets/images/female.png';
		}
		$data = array(

			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'gender' => $this->input->post('gender'),
			'slug' => $slug,
			'email' => $this->input->post('email'),
			'remember_token' => $token,
			'user_image' => $pic,
			'password' => $password,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),

		);

		$result = $this->db->insert('users', $data);
		if ($result) {
			echo 'success';

			$this->load->library('email');
			$this->email->initialize(array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_user' => 'chatroom.co.in@gmail.com',
				'smtp_pass' => '1106199355jj',
				'smtp_port' => 587,
				'charset' => 'utf-8',
				'mailtype' => 'html',
				'validation' => TRUE,
				'crlf' => "\r\n",
				'newline' => "\r\n",
				'smtp_crypto' => 'tls',
			));

			$this->email->from('chatroom.co.in@gmail.com', 'Chat Code');
			$this->email->to($data['email']);
			$this->email->subject('Verification email');
			$this->email->message($this->input->post('fname') . ' <a href="' . base_url() . 'ChatController/verify/' . $this->input->post('email') . '/' . $token . '">click</a>');

			$this->email->send();

		} else {
			echo 'something went wrong';
		}
	}

	function login() {

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$this->db->where('status', 1);
		$data = $this->db->get()->result();

		if ($data) {
			foreach ($data as $value) {

				$session_data = array(

					'username' => $value->email,
					'name' => $value->fname,
					'email' => $value->email,
					'id' => $value->id,
					'image' => $value->user_image,
				);
			}
			$data = $this->session->set_userdata($session_data);

			redirect('ChatController/home');

		} else {
			echo 'something went wrong ...!';
			$url = base_url();
			redirect('ChatController/index');
		}

	}

	function logout() {

		$sess_array = array(
			'username' => '',
		);
		$session = $this->session->unset_userdata('username');

		$data['message_display'] = 'Successfully Logout';
		redirect('ChatController/index');
	}

	function verify($email, $token) {

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(['email' => $email, 'remember_token' => $token]);
		$data = $this->db->get()->result();
		if ($data) {

			$res = array(
				'status' => 1,
				'remember_token' => 'NULL',

			);
			foreach ($data as $value) {
				echo $value->id;
				print_r($res);
			}

			$this->db->where('id', $value->id);
			$this->db->update('users', $res);
			redirect('ChatController/index');
		} else {
			echo 'false';
		}
	}

	function forgot_password() {
		$this->load->view('forgotpassword');
	}

	function forgot_password_action() {

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(['email' => $this->input->post('email'), 'status' => 1]);
		$data = $this->db->get()->result();

		if ($data) {

			$this->load->library('email');
			$this->email->initialize(array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_user' => 'chatroom.co.in@gmail.com',
				'smtp_pass' => '1106199355jj',
				'smtp_port' => 587,
				'charset' => 'utf-8',
				'mailtype' => 'html',
				'validation' => TRUE,
				'crlf' => "\r\n",
				'newline' => "\r\n",
				'smtp_crypto' => 'tls',
			));

			$pass = $this->generateRandomString();
			$tmp_pass['password'] = md5($pass);

			foreach ($data as $details) {

				$this->db->where(['id' => $details->id, 'email' => $details->email]);
				$this->db->update('users', $tmp_pass);

				$this->email->from('chatroom.co.in@gmail.com', 'Chat Code');
				$this->email->to($details->email);
				$this->email->subject('Verification email');
				$this->email->message($details->fname . ' your temporory password is ' . $pass);

				$this->email->send();
			}

		} else {echo 'details not found';}

	}

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	function profile_details($id, $email) {

		if ($this->session->userdata('username')) {
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(['id' => $id, 'email' => $email, 'status' => 1]);
			$data['profile_details'] = $this->db->get()->result();

			$data['myposts'] = $this->get_user_profile_posts();
			//$data['mypost'] = $this->get_user_profile_posts();
			$this->load->view('header', $data);
			$this->load->view('user_profile', $data);
			$this->load->view('footer', $data);
		} else {
			redirect('ChatController/logout');
		}

	}

	function user_upload_image() {

		$target = './assets/images/';
		$filename = $_FILES["user_upload_image"]["name"];
		$tmp_name = $_FILES["user_upload_image"]["tmp_name"];
		if (move_uploaded_file($tmp_name, $target . $filename)) {
			echo "The file  has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}

		$data = array(

			'upload_email' => $this->input->post('user_email'),
			'upload_image' => $target . $filename,

		);
		$this->db->insert('image_uploads', $data);
	}

	function user_upload_video() {
		$target = './assets/videos/';
		$filename = $_FILES["user_upload_video"]["name"];
		$tmp_name = $_FILES["user_upload_video"]["tmp_name"];
		echo $filename . $tmp_name;
		if (move_uploaded_file($tmp_name, $target . $filename)) {
			echo "The file  has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}

		$data = array(

			'upload_email' => $this->input->post('user_email'),
			'upload_video' => $target . $filename,

		);
		$this->db->insert('video_uploads', $data);
	}

	function user_upload_posts() {
		$data = array(
			'post_email' => $this->input->post('user_post_email'),
			'post_upload' => $this->input->post('post_text'),
		);

		$this->db->insert('post_uploads', $data);
	}

	public function get_user_profile_posts() {
		$this->db->select('post_uploads.post_id,post_uploads.post_email,post_uploads.post_upload,post_uploads.posted_time,likes.posts_id,likes.liked_email,count(likes.posts_id) as likes_count ');

		$this->db->from('post_uploads');
		$this->db->join('likes', 'likes.posts_id=post_uploads.post_id', 'left');
		//$this->db->join('dislikes', 'dislikes.posts_id=post_uploads.post_id');
		$this->db->where('post_email', $this->session->userdata('email'));
		$this->db->order_by('post_uploads.post_id', 'DESC');
		$this->db->group_by(array('post_uploads.post_id', 'post_uploads.post_email', 'post_uploads.post_upload', 'post_uploads.posted_time', 'likes.posts_id', 'likes.liked_email'));
		return $this->db->get()->result();

		$this->db->select('post_uploads.post_id,dislikes.disliked_email,count(dislikes.posts_id) as dislikes_count ');

		$this->db->from('post_uploads');
		$this->db->join('dislikes', 'dislikes.posts_id=post_uploads.post_id', 'left');
		//$this->db->join('dislikes', 'dislikes.posts_id=post_uploads.post_id');
		$this->db->where('post_email', $this->session->userdata('email'));
		$this->db->order_by('post_uploads.post_id', 'DESC');
		$this->db->group_by(array('dislikes.posts_id', 'dislikes.disliked_email', 'post_uploads.post_id'));
		$dislikes = $this->db->get()->result();
		return array_merge($likes, $dislikes);

		echo "<pre>";
		print_r($data);
	}

	function post_likes($email, $post_id) {

		$data = array(

			'liked_email' => $email,
			'posts_id' => $post_id,
		);
		$insert = $this->db->insert('likes', $data);
		if ($insert) {
			redirect('ChatController/profile_details/' . $this->session->userdata("id") . '/' . $this->session->userdata("email"));
		}
	}

	function post_dislikes($email, $post_id) {
		$data = array(

			'disliked_email' => $email,
			'posts_id' => $post_id,
		);

		$insert = $this->db->insert('dislikes', $data);
		if ($insert) {
			redirect('ChatController/profile_details/' . $this->session->userdata("id") . '/' . $this->session->userdata("email"));
		}
	}

	public function find_friends() {

		if ($this->session->userdata('username')) {

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id !=', $this->session->userdata('id'));
			$data['find_friends'] = $this->db->get()->result();
			//$data['friends'] = $this->friends();
			$this->load->view('header', $data);
			$this->load->view('find_friends', $data);
			$this->load->view('footer', $data);
		} else {
			redirect('ChatController/logout');
		}
	}

	function friend_request($email) {

		$data = array(

			'req_sender' => $this->session->userdata('email'),
			'req_acceptor' => $email,
			'friend_status' => 'PENDING',

		);

		$insert = $this->db->insert('friend_requests', $data);
		if ($insert) {

			redirect('ChatController/find_friends');
		}
	}

	function get_friend_req() {
		if ($this->session->userdata('username')) {
			$email = $this->session->userdata('email');

			$this->db->select('*');
			$this->db->from('friend_requests');
			$this->db->join('users', 'users.email=friend_requests.req_sender');
			$this->db->where('req_acceptor', $email);
			$data['friend_requests'] = $this->db->get()->result();

			$this->load->view('header', $data);
			$this->load->view('friend_requests', $data);
			$this->load->view('footer', $data);

		} else {
			redirect('ChatController/logout');
		}
	}

	function friend_request_action($email, $id) {
		$data = array(
			'friend_status' => 'FRIEND',
			'friends_from' => date('Y-m-d'),
		);
		$this->db->where(['req_sender' => $email, 'conversation_id' => $id]);
		$update = $this->db->update('friend_requests', $data);
		if ($update) {
			echo 'friends';
		}
	}

	public function get_friends_list() {

		if ($this->session->userdata('username')) {

			// $this->db->select('users.*,friend_requests.conversation_id,friend_requests.req_sender,friend_requests.req_acceptor,friend_requests.friend_status,friend_requests.friends_from');
			// $this->db->from('friend_requests');
			// $this->db->join('users', 'users.email=friend_requests.req_acceptor');
			// $this->db->where('req_sender', $this->session->userdata('email'));
			// $this->db->where('friend_requests.friend_status', 'FRIEND');
			// $requester = $this->db->get()->result();

			// $this->db->select('users.*,,friend_requests.conversation_id,friend_requests.req_sender,friend_requests.req_acceptor,friend_requests.friend_status,friend_requests.friends_from');
			// $this->db->from('friend_requests');
			// $this->db->join('users', 'users.email=friend_requests.req_sender');
			// $this->db->where('req_acceptor', $this->session->userdata('email'));
			// $this->db->where('friend_requests.friend_status', 'FRIEND');
			// $acceptor = $this->db->get()->result();

			// $data['friends'] = array_merge($requester, $acceptor);
			$data['friends'] = $this->friends();
			// echo "<pre>";
			// print_r($data);exit;
			$this->load->view('header', $data);
			$this->load->view('friend_list', $data);
			$this->load->view('footer', $data);
		} else {
			redirect('ChatController/logout');
		}
	}

	public function friends() {
		$this->db->select('users.*,friend_requests.conversation_id,friend_requests.req_sender,friend_requests.req_acceptor,friend_requests.friend_status,friend_requests.friends_from');
		$this->db->from('friend_requests');
		$this->db->join('users', 'users.email=friend_requests.req_acceptor');
		$this->db->where('req_sender', $this->session->userdata('email'));
		$this->db->where('friend_requests.friend_status', 'FRIEND');
		$requester = $this->db->get()->result();

		$this->db->select('users.*,,friend_requests.conversation_id,friend_requests.req_sender,friend_requests.req_acceptor,friend_requests.friend_status,friend_requests.friends_from');
		$this->db->from('friend_requests');
		$this->db->join('users', 'users.email=friend_requests.req_sender');
		$this->db->where('req_acceptor', $this->session->userdata('email'));
		$this->db->where('friend_requests.friend_status', 'FRIEND');
		$acceptor = $this->db->get()->result();
		return array_merge($requester, $acceptor);
	}

	function delete_frnd_request($email, $id) {
		//echo $email . $id;

		$this->db->where(['req_sender' => $email, 'conversation_id' => $id]);
		$delete = $this->db->delete('friend_requests');
		if ($delete) {
			echo 'deleted successfully';
		} else {
			echo 'error in deletion';
		}
	}

	function profile_pic_upload() {
		$data = array(

			'pro_pic_name' => $this->input->post('user_pro_pic'),
			'pro_pic_user' => $this->session->userdata('email'),
			'uploaded_time' => date('Y-m-d H:i:s'),
		);
		echo "<pre>";
		print_r($data);
	}

	function chat_msg($email, $id) {
		if ($this->session->userdata('username')) {
			$dat['email'] = $email;
			$dat['id'] = $id;

			$this->load->view('header', $dat);
			$this->load->view('message', $dat);
			//$this->load->view('footer', $dat);
		} else {
			redirect('ChatController/index');
		}
	}

	function insert_msg() {
		if ($this->session->userdata('username')) {
			$data = array(

				'message' => $this->input->post('typing'),
				'sender' => $this->session->userdata('email'),
				'receiver' => $this->input->post('receiver'),
				'convo_id' => $this->input->post('con_id'),
				'sent' => date('Y-m-d H:i:s'),

			);

			$insert = $this->db->insert('messages', $data);

			if ($data) {
				echo "success";
			} else {
				echo 'something went wrong';
			}
		} else {
			redirect('ChatController/index');
		}
	}

	function display_msg($data) {

		if ($this->session->userdata('username')) {
			$this->db->select('*');
			$this->db->from('messages');
			//$this->db->where('receiver', $email);
			$this->db->where('convo_id', $data);
			$result = $this->db->get()->result();
			foreach ($result as $value) {
				if ($value->sender == $this->session->userdata('email')) {
					echo '<div><p>' . '<span>' . $value->sender . ' : </span>' . $value->message . '<p></div>';
				} else {

					echo '<div><p>' . '<span>' . $value->sender . ' : </span>' . $value->message . '<p></div>';
				}

			}
		} else {
			redirect('ChatController/index');
		}

	}
	function messenger() {

		$data['friends'] = $this->friends();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('header', $data);
		$this->load->view('messages_list', $data);
		$this->load->view('footer', $data);
	}

} //class
