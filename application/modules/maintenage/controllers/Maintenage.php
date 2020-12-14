<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maintenage extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_maintenage');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel maintenage';
			$data['data'] = $this->M_maintenage->tampil_data_all('maintenage','id_maintenage')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_menu'] = 'Panel maintenage';
			$data['data'] = $this->M_maintenage->tampil_data_all('maintenage','id_maintenage')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header_user',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{
if($this->session->userdata('status') == 'admin'){
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_maintenage->tampil_data('user','id_user')->result();

	$data['distribusi'] = $this->M_maintenage->get_distri()->result();
		$data['jenis_maintenage'] = $this->M_maintenage->tampil_data('jenis_maintenage','nama_jenis_maintenage')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
} else {
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_maintenage->tampil_data('user','id_user')->result();

	$data['distribusi'] = $this->M_maintenage->get_distri()->result();
		$data['jenis_maintenage'] = $this->M_maintenage->tampil_data('jenis_maintenage','nama_jenis_maintenage')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header_user',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}

}







public function proses_tambah()
{

	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|mp4';
	$config['max_size']             = 100000;
	$config['max_width']            = 10000;
	$config['max_height']           = 10000;
	$config['encrypt_name']			= TRUE;
	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload('foto'))
{
		$error = array('error' => $this->upload->display_errors());



}
else
{
$foto = $this->upload->data("file_name");
$tgl_maintenage = $_POST['tgl_maintenage'];
$id_distribusi = $_POST['id_distribusi'];
$id_jenis_maintenage = $_POST['id_jenis_maintenage'];
$keterangan = $_POST['keterangan'];
$id_user = $_POST['id_user'];
$cost = $_POST['cost'];

$data = array(

	'tgl_maintenage ' => $tgl_maintenage  ,
	'id_distribusi ' => $id_distribusi  ,
	'id_jenis_maintenage ' => $id_jenis_maintenage  ,
	'keterangan ' => $keterangan  ,
	'id_user ' => $id_user  ,
	'cost ' => $cost  ,
	'foto ' => $foto  ,

 );

 $this->M_maintenage->input_data($data,'maintenage');
 redirect('maintenage/');

}

}

public function edit($id)
{
$data['data']= $this->M_maintenage->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_maintenage->tampil_data('user', 'id_user')->result();
	$data['distribusi'] = $this->M_maintenage->get_distri()->result();
		$data['jenis_maintenage'] = $this->M_maintenage->tampil_data('jenis_maintenage','nama_jenis_maintenage')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');


	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}


public function nota($id)
{
$data['data']= $this->M_maintenage->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_maintenage->tampil_data('user', 'id_user')->result();
	$data['distribusi'] = $this->M_maintenage->get_distri()->result();
		$data['jenis_maintenage'] = $this->M_maintenage->tampil_data('jenis_maintenage','nama_jenis_maintenage')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');


	$data['nama_pengguna'] = $this->session->userdata('nama');

	$this->load->view('nota',$data);

}




public function proses_edit()
{
	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|mp4';
	$config['max_size']             = 100000;
	$config['max_width']            = 10000;
	$config['max_height']           = 10000;
	$config['encrypt_name']			= TRUE;
	$this->load->library('upload', $config);


	if ( ! $cek = $this->upload->do_upload('foto'))
	{
		$error = array('error' => $this->upload->display_errors());
$foto = $_POST['foto'];
$id = $_POST['id'];
$tgl_maintenage = $_POST['tgl_maintenage'];
$id_distribusi = $_POST['id_distribusi'];
$id_jenis_maintenage = $_POST['id_jenis_maintenage'];
$keterangan = $_POST['keterangan'];
$id_user = $_POST['id_user'];
$cost = $_POST['cost'];

$data = array(

'tgl_maintenage ' => $tgl_maintenage  ,
'id_distribusi ' => $id_distribusi  ,
'id_jenis_maintenage ' => $id_jenis_maintenage  ,
'keterangan ' => $keterangan  ,
'id_user ' => $id_user  ,
'cost ' => $cost  ,
'foto ' => $foto  ,

);
$where = array('id_maintenage' => $id, );



$this->M_maintenage->update_data($where,$data,'maintenage');
		redirect('maintenage/');

	}
	else
	{


		if($cek == 1){
			unlink('./uploads/'.$_POST['foto']);
			$foto = $this->upload->data("file_name");
		}else {
			$foto = $_POST['foto'];
		}

	$id = $_POST['id'];
	$tgl_maintenage = $_POST['tgl_maintenage'];
	$id_distribusi = $_POST['id_distribusi'];
	$id_jenis_maintenage = $_POST['id_jenis_maintenage'];
	$keterangan = $_POST['keterangan'];
	$id_user = $_POST['id_user'];
	$cost = $_POST['cost'];

	$data = array(

	'tgl_maintenage ' => $tgl_maintenage  ,
	'id_distribusi ' => $id_distribusi  ,
	'id_jenis_maintenage ' => $id_jenis_maintenage  ,
	'keterangan ' => $keterangan  ,
	'id_user ' => $id_user  ,
	'cost ' => $cost  ,
	'foto ' => $foto  ,

	);
	$where = array('id_maintenage' => $id, );



	$this->M_maintenage->update_data($where,$data,'maintenage');
	 		redirect('maintenage/');

}
}


	function hapus($id){
			$where = array('id_maintenage' => $id);
			$this->M_maintenage->hapus_data($where,'maintenage');
			redirect('maintenage/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_maintenage->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}

		public function foto()
		{
					if($this->session->userdata('status') == 'admin'){
			$data['nama_menu'] = 'Panel maintenage';
			$data['data'] = $this->M_maintenage->tampil_data_all('maintenage','id_maintenage')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('foto',$data);
			$this->load->view('footer',$data);
		} else {
			$data['nama_menu'] = 'Panel maintenage';
			$data['data'] = $this->M_maintenage->tampil_data_all('maintenage','id_maintenage')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header_user',$data);
			$this->load->view('foto',$data);
			$this->load->view('footer',$data);
		}
		}


}
