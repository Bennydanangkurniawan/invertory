<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_dashboard');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel Admin';

			$data['semua_barang'] = $this->M_dashboard->semua_barang()->result();
						$data['semua_distribusi'] = $this->M_dashboard->semua_distribusi()->result();
										$data['semua_maintenage'] = $this->M_dashboard->semua_maintenage()->result();
			// $data['semua_tps'] = $this->M_dashboard->semua_tps()->result();
			// $data['semua_lapor'] = $this->M_dashboard->tps_lapor()->result();
			// $data['jumlahperolehan'] = $this->M_dashboard->jumlahperolehan()->result();
			// $data['hasil_desa'] = $this->M_dashboard->hasil_desa()->result();

			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_menu'] = 'Panel User';

			$data['semua_barang'] = $this->M_dashboard->semua_barang()->result();
						$data['semua_distribusi'] = $this->M_dashboard->semua_distribusi()->result();
										$data['semua_maintenage'] = $this->M_dashboard->semua_maintenage()->result();

													$data['nama_pengguna'] = $this->session->userdata('nama');

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

	public function jumlahhasil($id_desa)
	{
		$hasil = $this->M_dashboard->jumlahhasil($id_desa)->result();

		// print_r($hasil);
		if($hasil[0]->jumlah == 0){
			echo "0, ";
		}else {

			echo $hasil[0]->jumlah.', ';
		}

	}

	public function jumlah_semua()
	{
		$hasil = $this->M_dashboard->jumlahsemua()->result();

		echo $hasil[0]->jumlah;
	}


	public function jumlahhasilkosong($id_desa)
	{
		$hasil = $this->M_dashboard->jumlahsemuakosong($id_desa)->result();

		// print_r($hasil);
		if($hasil[0]->jumlah == 0){
			echo "0, ";
		}else {

			echo $hasil[0]->jumlah.', ';
		}

	}


	public function inputcek()
	{



			if($this->session->userdata('status') == 'admin'){
				$data['nama_menu'] = 'Cek Input Data';
				$data['user'] = $this->M_dashboard->tampil_semua()->result();
				$data['nama_pengguna'] = $this->session->userdata('nama');

				$this->load->view('header',$data);
				$this->load->view('main_semua',$data);
				$this->load->view('footer',$data);


			} else {
				$data['nama_pengguna'] = $this->session->userdata('nama');
				$data['tps'] = $this->session->userdata('tps');
				$desa = array('id_desa' => $this->session->userdata('id_desa') );

				$des = $this->m_dashboard->get_data('t_desa',$desa)->result();

				$data['nama_menu'] = $des[0]->nama_desa;

				$this->load->view('header_user',$data);
				$this->load->view('main_user',$data);
				$this->load->view('footer',$data);



			}


		// code...
	}

	public function cek_data($tabel,$id_user)
	{
			$where = array('id_user' =>$id_user);
			$cek =	$this->M_dashboard->get_data($tabel,$where)->num_rows();

			if($cek> 0):
				echo '<a href="#" class="btn btn-success"><span class="fa fa-check" ></span> </a> ';
			else:
        echo '<a href="#" class="btn btn-danger"><span class="fa fa-ban" ></span> </a> ';
				endif;
	}

}
