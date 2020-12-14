<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_satuan');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel satuan';
			$data['data'] = $this->M_satuan->tampil_data('kd_satuan','id_satuan')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_satuan->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_satuan->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_satuan = $_POST['nama_satuan'];




$data = array('nama_satuan' =>$nama_satuan ,

 );

 $this->M_satuan->input_data($data,'kd_satuan');
 		redirect('satuan/');
}

public function edit($id)
{
$data['datas']= $this->M_satuan->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_satuan->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_satuan = $_POST['nama_satuan'];




	$data = array('nama_satuan' =>$nama_satuan ,

	 );


$id = $_POST['id'];


$where = array('id_satuan' => $id, );



$this->M_satuan->update_data($where,$data,'kd_satuan');
 		redirect('satuan/');
}



	function hapus($id){
			$where = array('id_satuan' => $id);
			$this->M_satuan->hapus_data($where,'kd_satuan');
			redirect('satuan/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_satuan->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
