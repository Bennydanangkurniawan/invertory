<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suplayer extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_suplayer');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel suplayer';
			$data['data'] = $this->M_suplayer->tampil_data('suplayer','id_suplayer')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_suplayer->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_suplayer->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_suplayer = $_POST['nama_suplayer'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];




$data = array('nama_suplayer' =>$nama_suplayer ,
'no_telp' =>$no_telp ,
'alamat' =>$alamat ,

 );

 $this->M_suplayer->input_data($data,'suplayer');
 		redirect('suplayer/');
}

public function edit($id)
{
$data['datas']= $this->M_suplayer->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_suplayer->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_suplayer = $_POST['nama_suplayer'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];


	$data = array('nama_suplayer' =>$nama_suplayer ,
	'no_telp' =>$no_telp ,
	'alamat' =>$alamat ,

	 );


$id = $_POST['id'];


$where = array('id_suplayer' => $id, );



$this->M_suplayer->update_data($where,$data,'suplayer');
 		redirect('suplayer/');
}



	function hapus($id){
			$where = array('id_suplayer' => $id);
			$this->M_suplayer->hapus_data($where,'suplayer');
			redirect('suplayer/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_suplayer->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
