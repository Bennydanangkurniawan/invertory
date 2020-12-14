<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_pegawai');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel pegawai';
			$data['data'] = $this->M_pegawai->tampil_data('pegawai','id_pegawai')->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_pegawai->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

public function tambah()
{

	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_pegawai->tampil_data('user','id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_add',$data);
	$this->load->view('footer',$data);
}







public function proses_tambah()
{
$nama_pegawai = $_POST['nama_pegawai'];
$nip = $_POST['nip'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];




$data = array('nama_pegawai' =>$nama_pegawai ,
'nip' =>$nip ,
'pangkat' =>$pangkat ,
'jabatan' =>$jabatan ,

 );

 $this->M_pegawai->input_data($data,'pegawai');
 		redirect('pegawai/');
}

public function edit($id)
{
$data['datas']= $this->M_pegawai->get_datas($id)->result();
	$data['nama_menu'] = 'Panel Admin';
	$data['user'] = $this->M_pegawai->tampil_data('user', 'id_user')->result();

	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('from_edit',$data);
	$this->load->view('footer',$data);
}



public function proses_edit()
{
	$nama_pegawai = $_POST['nama_pegawai'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];




	$data = array('nama_pegawai' =>$nama_pegawai ,
	'nip' =>$nip ,
	'pangkat' =>$pangkat ,
	'jabatan' =>$jabatan ,

	 );


$id = $_POST['id'];


$where = array('id_pegawai' => $id, );



$this->M_pegawai->update_data($where,$data,'pegawai');
 		redirect('pegawai/');
}



	function hapus($id){
			$where = array('id_pegawai' => $id);
			$this->M_pegawai->hapus_data($where,'pegawai');
			redirect('pegawai/');
		}

		public function list_desa($id)
		{
			$data['nama_menu'] = 'List Pengguna Desa';
			$data['user'] = $this->M_pegawai->list_data($id)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);
		}


}
