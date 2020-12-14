<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('m_panel');

		}


	public function index()
	{


		$this->load->view('login');
	}


	function auth_log()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username == ''){
			echo "<script>alert('Maaf Username Tidak Boleh Kosong'); </script>";
			$this->index();
		}else{


			$where = array(
				'username' => $username,
				'password' => md5($password)
			);


$cek = $this->m_panel->cek_login("user",$where)->num_rows();
if($cek > 0){
$us= $this->m_panel->cek_login("user",$where)->result();


			$data_session = array(
				'nama' => $us[0]->nama_pengguna,
				'status' =>$us[0]->status,
				'id_user' =>$us[0]->id_user,
									'state' => 'login'
				);


			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard"));

		}else{
			echo "<script>alert('Maaf Password Dan Username Salah'); </script>";
			$this->index();
		}



		}

	}




	function logout(){
			$this->session->sess_destroy();
			redirect(base_url('panel'));
		}
}
