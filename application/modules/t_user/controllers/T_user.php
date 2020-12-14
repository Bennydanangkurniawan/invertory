<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_user extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel Admin';
					$data['user'] = $this->M_user->tampil_data('user')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_user->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_user->tampil_data('user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}



public function pilihdesa($id_kecamatan)
{



	$where = array('id_kecamatan' => $id_kecamatan, );

	$data = $this->M_user->get_data('t_desa',$where)->result();

foreach ($data as $k) {
	echo "<option  value='".$k->id_desa."' >".$k->nama_desa."</option>";
}

}



public function proses_tambah()
{
$nama_pengguna = $_POST['nama_pengguna'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];



$data = array('nama_pengguna' =>$nama_pengguna ,
'username' => $username,
'password' => md5($password),
'status' => $status
 );

 $this->M_user->input_data($data,'user');
 		redirect('t_user/');
}

public function edit($id)
{
$data['datas']= $this->M_user->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_user->tampil_data('user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_pengguna = $_POST['nama_pengguna'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];




$id = $_POST['id'];


$where = array('id_user' => $id, );

$data = array('nama_pengguna' =>$nama_pengguna ,
'username' => $username,
'password' => md5($password),
'status' => $status
 );

$this->M_user->update_data($where,$data,'user');
 		redirect('t_user/');
}



	function hapus($id){
			$where = array('id_user' => $id);
			$this->M_user->hapus_data($where,'user');
			redirect('t_user/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_user->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
