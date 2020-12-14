<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jenis');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel Jenis';
			$data['data'] = $this->M_jenis->tampil_data('kd_jenis','id_jenis')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_jenis->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_jenis->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_jenis = $_POST['nama_jenis'];




$data = array('nama_jenis' =>$nama_jenis ,

 );

 $this->M_jenis->input_data($data,'kd_jenis');
 		redirect('jenis/');
}

public function edit($id)
{
$data['datas']= $this->M_jenis->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_jenis->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_jenis = $_POST['nama_jenis'];




	$data = array('nama_jenis' =>$nama_jenis ,

	 );


$id = $_POST['id'];


$where = array('id_jenis' => $id, );



$this->M_jenis->update_data($where,$data,'kd_jenis');
 		redirect('jenis/');
}



	function hapus($id){
			$where = array('id_jenis' => $id);
			$this->M_jenis->hapus_data($where,'kd_jenis');
			redirect('jenis/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_jenis->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
