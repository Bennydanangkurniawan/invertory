<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ruang extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_ruang');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel ruang';
			$data['data'] = $this->M_ruang->tampil_data('ruang','id_ruang')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_ruang->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_ruang->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_ruang = $_POST['nama_ruang'];




$data = array('nama_ruang' =>$nama_ruang ,

 );

 $this->M_ruang->input_data($data,'ruang');
 		redirect('ruang/');
}

public function edit($id)
{
$data['datas']= $this->M_ruang->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_ruang->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_ruang = $_POST['nama_ruang'];




	$data = array('nama_ruang' =>$nama_ruang ,

	 );


$id = $_POST['id'];


$where = array('id_ruang' => $id, );



$this->M_ruang->update_data($where,$data,'ruang');
 		redirect('ruang/');
}



	function hapus($id){
			$where = array('id_ruang' => $id);
			$this->M_ruang->hapus_data($where,'ruang');
			redirect('ruang/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_ruang->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
