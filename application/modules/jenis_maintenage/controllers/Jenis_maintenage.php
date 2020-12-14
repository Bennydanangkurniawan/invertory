<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_maintenage extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jenis_maintenage');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel jenis_maintenage';
			$data['data'] = $this->M_jenis_maintenage->tampil_data('jenis_maintenage','id_jenis_maintenage')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_jenis_maintenage->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_jenis_maintenage->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_jenis_maintenage = $_POST['nama_jenis_maintenage'];




$data = array('nama_jenis_maintenage' =>$nama_jenis_maintenage ,

 );

 $this->M_jenis_maintenage->input_data($data,'jenis_maintenage');
 		redirect('jenis_maintenage/');
}

public function edit($id)
{
$data['datas']= $this->M_jenis_maintenage->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_jenis_maintenage->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_jenis_maintenage = $_POST['nama_jenis_maintenage'];




	$data = array('nama_jenis_maintenage' =>$nama_jenis_maintenage ,

	 );


$id = $_POST['id'];


$where = array('id_jenis_maintenage' => $id, );



$this->M_jenis_maintenage->update_data($where,$data,'jenis_maintenage');
 		redirect('jenis_maintenage/');
}



	function hapus($id){
			$where = array('id_jenis_maintenage' => $id);
			$this->M_jenis_maintenage->hapus_data($where,'jenis_maintenage');
			redirect('jenis_maintenage/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_jenis_maintenage->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
