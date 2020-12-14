<?php

class M_distribusi extends CI_Model{


  function get_data($table,$where){
		return $this->db->get_where($table,$where);
	}

  function tampil_data($tabel,$nama_id){
  return $this->db->query("SELECT * FROM ".$tabel." ORDER BY ".$nama_id);
}
function list_data($id){
return $this->db->query("SELECT * FROM user LEFT JOIN t_desa ON t_desa.id_desa = user.id_desa WHERE t_desa.id_desa=".$id." ORDER BY no_tps ASC");
}


public function get_all()
{
  return $this->db->query('SELECT *, YEAR(tgl_pembelian) as tahun_beli FROM distribusi
LEFT JOIN barang ON barang.id_barang = distribusi.id_barang
LEFT JOIN pegawai ON distribusi.id_pegawai = pegawai.id_pegawai
LEFT JOIN ruang ON distribusi.id_ruang = ruang.id_ruang
LEFT JOIN user ON user.id_user =  distribusi.id_user ORDER BY id_distribusi DESC');
}


function input_data($data,$table){
		$this->db->insert($table,$data);
	}


  public function get_datas($id)
  {
   return $this->db->query('SELECT * FROM distribusi
    LEFT JOIN barang ON barang.id_barang = distribusi.id_barang
    LEFT JOIN pegawai ON distribusi.id_pegawai = pegawai.id_pegawai
    LEFT JOIN ruang ON distribusi.id_ruang = ruang.id_ruang
    LEFT JOIN user ON user.id_user =  distribusi.id_user WHERE id_distribusi='.$id);
  }


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


  function hapus_data($where,$table){
  	$this->db->where($where);
  	$this->db->delete($table);
  }


public function stock_awal($id)
{
  return $this->db->query('SELECT jumlah_barang FROM barang WHERE id_barang ='.$id);
}

public function stock_akhir($id)
{
  return $this->db->query('SELECT sum(jumlah) as jumlah_barang FROM distribusi WHERE id_barang ='.$id);
}

public function cek_cost($id)
{
  return $this->db->query('SELECT sum(cost) as jumlah_cost FROM maintenage LEFT JOIN distribusi ON distribusi.id_distribusi = maintenage.id_distribusi LEFT JOIN barang ON barang.id_barang = distribusi.id_barang WHERE barang.id_barang ='.$id);
}

}
