<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_barang');

		if($this->session->userdata('state') != "login"){
			redirect(base_url("panel"));
		}
	}


	public function index()
	{

		if($this->session->userdata('status') == 'admin'){

			$data['nama_menu'] = 'Panel barang';
			$data['data'] = $this->M_barang->get_all();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('main',$data);
			$this->load->view('footer',$data);


		} else {
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$data['tps'] = $this->session->userdata('tps');
			$desa = array('id_desa' => $this->session->userdata('id_desa') );

			$des = $this->M_barang->get_data('t_desa',$desa)->result();

			$data['nama_menu'] = $des[0]->nama_desa;

			$this->load->view('header_user',$data);
			$this->load->view('main_user',$data);
			$this->load->view('footer',$data);


		}

	}
	public function cetak_bhp()
	{

			$data['data'] = $this->M_barang->get_sparepart();


		$this->load->view('cetak_bhp',$data);

	}

	public function sparepart()
	{
		$data['nama_menu'] = 'Panel barang';
		$data['data'] = $this->M_barang->get_sparepart();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('main_sparepart',$data);
		$this->load->view('footer',$data);

	}

	public function tambah()
	{

		$data['nama_menu'] = 'Panel Tambah Barang';
		$data['user'] = $this->M_barang->tampil_data('user','id_user')->result();

		$data['nama_pengguna'] = $this->session->userdata('nama');
		//get data Query
		$data['kd_jenis'] = $this->M_barang->tampil_data('kd_jenis','nama_jenis')->result();
				$data['kd_satuan'] = $this->M_barang->tampil_data('kd_satuan','nama_satuan')->result();
		$data['suplayer'] = $this->M_barang->tampil_data('suplayer','nama_suplayer')->result();
		$data['ruang'] = $this->M_barang->tampil_data('ruang','nama_ruang')->result();
		$data['kd_kategory'] = $this->M_barang->tampil_data('kd_kategory','nama_kategory')->result();
		$this->load->view('header',$data);
		$this->load->view('from_add',$data);
		$this->load->view('footer',$data);
	}







	public function proses_tambah()
	{
		echo '<script type="text/javascript">
		alert("Barang Telah Di Tambahkan");
		</script>';
		$no_faktur =$_POST['no_faktur'];
		$nama_barang =$_POST['nama_barang'];
		$id_jenis =$_POST['id_jenis'];
		$id_kategory =$_POST['id_kategory'];
		$tgl_pembelian =$_POST['tgl_pembelian'];
		$tgl_produk =$_POST['tgl_produk'];
		$id_suplayer =$_POST['id_suplayer'];
		$id_ruang =$_POST['id_ruang'];
		$deskripsi =$_POST['deskripsi'];
		$harga_pembelian =$_POST['harga_pembelian'];
		$penurunan_aset =$_POST['penurunan_aset'];
		$maintenage =$_POST['maintenage'];
		$asset =$_POST['asset'];
		$jumlah_barang =$_POST['jumlah_barang'];
			$id_satuan =$_POST['id_satuan'];

		$data = array(
			'no_faktur' => $no_faktur ,
			'nama_barang' => $nama_barang ,
			'id_jenis' =>  $id_jenis,
			'id_kategory' => $id_kategory ,
			'tgl_pembelian' =>  $tgl_pembelian,
			'tgl_produk' =>  $tgl_produk,
			'id_suplayer' =>  $id_suplayer,
			'id_ruang' =>  $id_ruang,
			'deskripsi' =>  $deskripsi,
			'harga_pembelian' =>  $harga_pembelian,
			'penurunan_aset' =>  $penurunan_aset,
			'maintenage' =>  $maintenage,
			'assets' =>  $asset,
			'jumlah_barang' =>  $jumlah_barang,
			'id_satuan' =>  $id_satuan,

		);

		$this->M_barang->input_data($data,'barang');
		redirect('barang/');
	}

	public function edit($id)
	{
		$data['datas']= $this->M_barang->get_datas($id)->result();
		$data['nama_menu'] = 'Panel Edit Barang';
		$data['barang'] = $this->M_barang->get_edit($id)->result();

	$data['kd_satuan'] = $this->M_barang->tampil_data('kd_satuan','nama_satuan')->result();
		$data['kd_jenis'] = $this->M_barang->tampil_data('kd_jenis','nama_jenis')->result();
		$data['suplayer'] = $this->M_barang->tampil_data('suplayer','nama_suplayer')->result();
		$data['ruang'] = $this->M_barang->tampil_data('ruang','nama_ruang')->result();
		$data['kd_kategory'] = $this->M_barang->tampil_data('kd_kategory','nama_kategory')->result();


		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('from_edit',$data);
		$this->load->view('footer',$data);
	}



	public function proses_edit()
	{
		echo '<script type="text/javascript">
		alert("Barang Telah Di Ubah");
		</script>';


		$id = $_POST['id'];


		$where = array('id_barang' => $id, );

		$no_faktur =$_POST['no_faktur'];
		$nama_barang =$_POST['nama_barang'];
		$id_jenis =$_POST['id_jenis'];
		$id_kategory =$_POST['id_kategory'];
		$tgl_pembelian =$_POST['tgl_pembelian'];
		$tgl_produk =$_POST['tgl_produk'];
		$id_suplayer =$_POST['id_suplayer'];
		$id_ruang =$_POST['id_ruang'];
		$deskripsi =$_POST['deskripsi'];
		$harga_pembelian =$_POST['harga_pembelian'];
		$penurunan_aset =$_POST['penurunan_aset'];
		$maintenage =$_POST['maintenage'];
		$asset =$_POST['asset'];
		$jumlah_barang =$_POST['jumlah_barang'];
	$id_satuan =$_POST['id_satuan'];
		$data = array(
			'no_faktur' => $no_faktur ,
			'nama_barang' => $nama_barang ,
			'id_jenis' =>  $id_jenis,
			'id_kategory' => $id_kategory ,
			'tgl_pembelian' =>  $tgl_pembelian,
			'tgl_produk' =>  $tgl_produk,
			'id_suplayer' =>  $id_suplayer,
			'id_ruang' =>  $id_ruang,
			'deskripsi' =>  $deskripsi,
			'harga_pembelian' =>  $harga_pembelian,
			'penurunan_aset' =>  $penurunan_aset,
			'maintenage' =>  $maintenage,
			'assets' =>  $asset,
			'jumlah_barang' =>  $jumlah_barang,
					'id_satuan' =>  $id_satuan,

		);




		$this->M_barang->update_data($where,$data,'barang');
		redirect('barang/');
	}



	function hapus($id){
		echo '<script type="text/javascript">
		alert("Barang Telah Di Hapus");
		</script>';
		$where = array('id_barang' => $id);
		$this->M_barang->hapus_data($where,'barang');

		redirect('barang/');
	}

	public function list_desa($id)
	{
		$data['nama_menu'] = 'List Pengguna Desa';
		$data['user'] = $this->M_barang->list_data($id)->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('main',$data);
		$this->load->view('footer',$data);
	}

	public function cek_stock($id_barang)
	{
		$stock_awal_data = $this->M_barang->stock_awal($id_barang)->result();
		$stock_awal = $stock_awal_data[0]->jumlah_barang;

		$stock_akhir_data = $this->M_barang->stock_akhir($id_barang)->result();
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

	//================================== USER Distribusi ====================


	public function user_tambah()
	{
			if($this->session->userdata('status') == 'admin'){
		$data['nama_menu'] = 'Distribusi Pegawai';
		$data['data'] = $this->M_barang->get('pegawai','nama_pegawai')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('user_tambah',$data);
		$this->load->view('footer',$data);
	} else {
		$data['nama_menu'] = 'Distribusi Pegawai';
		$data['data'] = $this->M_barang->get('pegawai','nama_pegawai')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header_user',$data);
		$this->load->view('user_tambah',$data);
		$this->load->view('footer',$data);
	}


	}

	public function invertory_tambah()
	{
					if($this->session->userdata('status') == 'admin'){
		$data['nama_menu'] = 'Distribusi Perawatan Invertory';
		$data['data'] = $this->M_barang->get_all_invertory()->result();
		// $data['data'] = $this->M_barang->get('distribusi','nama_pegawai')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('invertory_tambah',$data);
		$this->load->view('footer',$data);
	} else {
		$data['nama_menu'] = 'Distribusi Perawatan Invertory';
		$data['data'] = $this->M_barang->get_all_invertory()->result();
		// $data['data'] = $this->M_barang->get('distribusi','nama_pegawai')->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header_user',$data);
		$this->load->view('invertory_tambah',$data);
		$this->load->view('footer',$data);
	}

	}



	public function from_pegawai($id)
	{
		$where = array('id_pegawai' => $id, );


		$data['nama_menu'] = 'Distribusi Pegawai';
		$data['barang'] = $this->M_barang->tampil_data_barang('barang','nama_barang')->result();
		$data['data'] = $this->M_barang->tampilan_data($id)->result();
		$data['pegawai'] = $this->M_barang->get_data('pegawai', $where)->result();
		$data['nama_pengguna'] = $this->session->userdata('nama');
		$this->load->view('header',$data);
		$this->load->view('from_pegawai',$data);
		$this->load->view('footer',$data);


	}



		public function from_invertory($id)
		{
			$where = array('id_distribusi' => $id, );


			$data['nama_menu'] = 'Distribusi Sparepart Barang Invertory';
			$data['barang'] = $this->M_barang->tampil_data_barang('barang','nama_barang')->result();
			$data['data'] = $this->M_barang->tampilan_datas($id)->result();
			$data['distribusi'] = $this->M_barang->get_data('distribusi', $where)->result();
			$data['nama_pengguna'] = $this->session->userdata('nama');
			$this->load->view('header',$data);
			$this->load->view('from_invertory',$data);
			$this->load->view('footer',$data);


		}




	public function proses_distripegawai()
	{

		$id_pegawai= $_POST['id_pegawai'];
		$tgl_distribusi= $_POST['tgl_distribusi'];
		$id_barang= $_POST['id_barang'];
		$jumlah= $_POST['jumlah'];
		$data = array(
			'id_pegawai' => $id_pegawai,
			'tgl_distribusi' => $tgl_distribusi,
			'id_barang' => $id_barang,
			'jumlah' => $jumlah,

		);


		$this->M_barang->input_data($data,'distribusi_bhp');
		redirect('barang/from_pegawai/'.$id_pegawai);
	}


	function hapus_bhp($id,$id_pegawai){

		$where = array('id_distribusibhp' => $id);
		$this->M_barang->hapus_data($where,'distribusi_bhp');
		redirect('barang/from_pegawai/'.$id_pegawai);
	}


	function hapus_inv($id,$id_distribusi){

		$where = array('id_distribusibhp' => $id);
		$this->M_barang->hapus_data($where,'distribusi_bhp');
		redirect('barang/from_invertory/'.$id_distribusi);
	}




	public function cek_stockbhp($id_barang)
	{
		$stock_awal_data = $this->M_barang->stock_awal($id_barang)->result();
		$stock_awal = $stock_awal_data[0]->jumlah_barang;

		$stock_akhir_data = $this->M_barang->stock_akhirbhp($id_barang)->result();
		$stock_akhir = $stock_akhir_data[0]->jumlah_barang;
		$stock= $stock_awal - $stock_akhir;
		if($stock < 1) {
			echo '<a class="btn btn-danger">
			Barang Habis <span class="badge badge-light">'.$stock.'</span>
			<span class="sr-only">unread messages</span>
			</a>';
		}else {

			echo '<a type="button" href="#" class="btn btn-success">
			Stock <span class="badge badge-light">'.$stock.'</span>
			<span class="sr-only">unread messages</span>
			</a>';

		}

	}



		public function cek_stockbhplist($id_barang)
		{
			$stock_awal_data = $this->M_barang->stock_awal($id_barang)->result();
			$stock_awal = $stock_awal_data[0]->jumlah_barang;

			$stock_akhir_data = $this->M_barang->stock_akhirbhp($id_barang)->result();
			$stock_akhir = $stock_akhir_data[0]->jumlah_barang;
			$stock= $stock_awal - $stock_akhir;
			if($stock < 1) {
				echo '|HABIS|'.$stock;
			}else {

				echo '|TERSEDIA|'.$stock;

			}

		}

		public function cek_stockbhpct($id_barang)
		{
			$stock_awal_data = $this->M_barang->stock_awal($id_barang)->result();
			$stock_awal = $stock_awal_data[0]->jumlah_barang;

			$stock_akhir_data = $this->M_barang->stock_akhirbhp($id_barang)->result();
			$stock_akhir = $stock_akhir_data[0]->jumlah_barang;
			$stock= $stock_awal - $stock_akhir;
			if($stock < 1) {
				echo $stock;
			}else {

				echo $stock;

			}

		}


		public function proses_distriinv()
		{

			$id_distribusi= $_POST['id_distribusi'];
			$tgl_distribusi= $_POST['tgl_distribusi'];
			$id_barang= $_POST['id_barang'];
			$jumlah= $_POST['jumlah'];
			$data = array(
				'id_distribusi' => $id_distribusi,
				'tgl_distribusi' => $tgl_distribusi,
				'id_barang' => $id_barang,
				'jumlah' => $jumlah,

			);


			$this->M_barang->input_data($data,'distribusi_bhp');
			redirect('barang/from_invertory/'.$id_distribusi);
		}



}
