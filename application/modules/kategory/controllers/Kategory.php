<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategory extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_kategory');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel kategory';
			$data['data'] = $this->M_kategory->tampil_data('kd_kategory','id_kategory')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_kategory->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_kategory->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_kategory = $_POST['nama_kategory'];




$data = array('nama_kategory' =>$nama_kategory ,

 );

 $this->M_kategory->input_data($data,'kd_kategory');
 		redirect('kategory/');
}

public function edit($id)
{
$data['datas']= $this->M_kategory->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_kategory->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_kategory = $_POST['nama_kategory'];




	$data = array('nama_kategory' =>$nama_kategory ,

	 );


$id = $_POST['id'];


$where = array('id_kategory' => $id, );



$this->M_kategory->update_data($where,$data,'kd_kategory');
 		redirect('kategory/');
}



	function hapus($id){
			$where = array('id_kategory' => $id);
			$this->M_kategory->hapus_data($where,'kd_kategory');
			redirect('kategory/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_kategory->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
