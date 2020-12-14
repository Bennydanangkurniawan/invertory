<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_distribusi');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel distribusi';
			// $data['data'] = $this->M_distribusi->tampil_data('distribusi','id_distribusi')->result();
			$data['data'] = $this->M_distribusi->get_all()->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_distribusi->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}

	public function tambah()
	{

		$data['nama_menu'] = 'Panel Admin';
		$data['user'] = $this->M_distribusi->tampil_data('user','id_user')->result();

		$data['barang'] = $this->M_distribusi->tampil_datas('barang','nama_barang')->result();
		$data['pegawai'] = $this->M_distribusi->tampil_data('pegawai','nama_pegawai')->result();
		$data['ruang'] = $this->M_distribusi->tampil_data('ruang','nama_ruang')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');


		$this->load->view('header',$data);
		$this->load->view('from_add',$data);
		$this->load->view('footer',$data);
	}







	public function proses_tambah()
	{



		$kode_asset= $_POST['kode_asset'];
		$id_barang= $_POST['id_barang'];
		$jumlah= $_POST['jumlah'];
		$id_user= $_POST['id_user'];
		$id_pegawai= $_POST['id_pegawai'];
		$id_ruang= $_POST['id_ruang'];
				$id_pegawai_menyerahkan= $_POST['id_pegawai_menyerahkan'];
		$tgl_distribusi= $_POST['tgl_distribusi'];


		$data = array(
			'kode_asset' =>$kode_asset ,
			'id_barang' => $id_barang ,
			'jumlah' => $jumlah ,
			'id_user' => $id_user ,
			'id_pegawai' => $id_pegawai ,
			'id_ruang' => $id_ruang ,
				'id_pegawai_menyerahkan' => $id_pegawai_menyerahkan ,
			'tgl_distribusi' => $tgl_distribusi,

		);


		$this->M_distribusi->input_data($data,'distribusi');
		redirect('distribusi/');

	}

	public function edit($id)
	{
		$data['datas']= $this->M_distribusi->get_datas($id)->result();
		$data['nama_menu'] = 'Panel Admin';
		$data['user'] = $this->M_distribusi->tampil_data('user', 'id_user')->result();

		$data['barang'] = $this->M_distribusi->tampil_datas('barang','nama_barang')->result();
		$data['pegawai'] = $this->M_distribusi->tampil_data('pegawai','nama_pegawai')->result();
		$data['ruang'] = $this->M_distribusi->tampil_data('ruang','nama_ruang')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');

		$data['id_user'] = $this->session->userdata('id_user');

		$this->load->view('header',$data);
		$this->load->view('from_edit',$data);
		$this->load->view('footer',$data);
	}


	public function serah_terima($id)
	{
		$data['data']= $this->M_distribusi->get_datas($id)->result();


		$this->load->view('surat_serah',$data);

	}


	public function serah_terima2($id)
	{
		$data['data']= $this->M_distribusi->get_datas($id)->result();


		$this->load->view('surat_serah2',$data);

	}




		public function kartu_rawat($id)
		{
			$data['data']= $this->M_distribusi->get_datas($id)->result();


			$this->load->view('kartu_rawat',$data);

		}





	public function proses_edit()
	{
			$id = $_POST['id'];
			$where = array('id_distribusi' => $id, );



					$kode_asset= $_POST['kode_asset'];
					$id_barang= $_POST['id_barang'];
					$jumlah= $_POST['jumlah'];
					$id_user= $_POST['id_user'];
					$id_pegawai= $_POST['id_pegawai'];
					$id_ruang= $_POST['id_ruang'];
						$id_pegawai_menyerahkan= $_POST['id_pegawai_menyerahkan'];
					$tgl_distribusi= $_POST['tgl_distribusi'];


					$data = array(
						'kode_asset' =>$kode_asset ,
						'id_barang' => $id_barang ,
						'jumlah' => $jumlah ,
						'id_user' => $id_user ,
						'id_pegawai' => $id_pegawai ,
						'id_ruang' => $id_ruang ,
											'id_pegawai_menyerahkan' => $id_pegawai_menyerahkan ,
						'tgl_distribusi' => $tgl_distribusi,

					);



	$this->M_distribusi->update_data($where,$data,'distribusi');
	redirect('distribusi/');
}



function hapus($id){
	$where = array('id_distribusi' => $id);
	$this->M_distribusi->hapus_data($where,'distribusi');
	redirect('distribusi/');
}

public function list_desa($id)
{
	$data['nama_menu'] = 'List Pengguna Desa';
	$data['user'] = $this->M_distribusi->list_data($id)->result();
	$data['nama_pengguna'] = $this->session->userdata('nama');
	$this->load->view('header',$data);
	$this->load->view('main',$data);
	$this->load->view('footer',$data);
}



public function cek_stock($id_barang)
{
	$stock_awal_data = $this->M_distribusi->stock_awal($id_barang)->result();
	$stock_awal = $stock_awal_data[0]->jumlah_barang;

	$stock_akhir_data = $this->M_distribusi->stock_akhir($id_barang)->result();
	$stock_akhir = $stock_akhir_data[0]->jumlah_barang;
	$stock= $stock_awal - $stock_akhir;
	if($stock < 1) {
		echo '<a class="btn btn-danger">
  Barang Habis <span class="badge badge-light">'.$stock.'</span>
  <span class="sr-only">unread messages</span>
</a>';
	}else {

		echo '<a type="button" href="'.base_url().'distribusi/tambah" class="btn btn-success">
  Stock <span class="badge badge-light">'.$stock.'</span>
  <span class="sr-only">unread messages</span>
</a>';

	}

}

public function cek_pegawai($id)
{


$where = array('id_pegawai' => $id, );
$data = $this->M_distribusi->get_data('pegawai',$where)->result();
echo " <b> <u> ".$data[0]->nama_pegawai."</u> </b> <br>
			NIP. ".$data[0]->nip;

}


}
