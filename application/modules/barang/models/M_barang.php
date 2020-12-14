<?php

class M_barang extends CI_Model{


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
return  $this->db->query("SELECT * FROM barang
LEFT JOIN kd_jenis ON kd_jenis.id_jenis = barang.id_jenis
LEFT JOIN kd_kategory ON kd_kategory.id_kategory = barang.id_kategory
LEFT JOIN suplayer ON suplayer.id_suplayer = barang.id_suplayer
LEFT JOIN ruang ON ruang.id_ruang = barang.id_ruang WHERE assets = 1 ORDER by id_barang DESC")->result();
}

public function get_sparepart()
{
return  $this->db->query("SELECT * FROM barang
LEFT JOIN kd_jenis ON kd_jenis.id_jenis = barang.id_jenis
LEFT JOIN kd_kategory ON kd_kategory.id_kategory = barang.id_kategory
LEFT JOIN suplayer ON suplayer.id_suplayer = barang.id_suplayer
LEFT JOIN ruang ON ruang.id_ruang = barang.id_ruang WHERE assets = '0' ORDER by id_barang DESC")->result();
}



public function get_edit($id)
{
return  $this->db->query("SELECT * FROM barang
LEFT JOIN kd_jenis ON kd_jenis.id_jenis = barang.id_jenis
LEFT JOIN kd_kategory ON kd_kategory.id_kategory = barang.id_kategory
LEFT JOIN suplayer ON suplayer.id_suplayer = barang.id_suplayer
LEFT JOIN kd_satuan ON barang.id_satuan = kd_satuan.id_satuan
LEFT JOIN ruang ON ruang.id_ruang = barang.id_ruang WHERE id_barang =".$id);
}



function input_data($data,$table){
		$this->db->insert($table,$data);
	}


  public function get_datas($id)
  {
    return $this->db->query('SELECT * FROM barang
WHERE id_barang ='.$id);
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


  public function stock_akhirbhp($id)
  {
    return $this->db->query('SELECT sum(jumlah) as jumlah_barang FROM distribusi_bhp WHERE id_barang ='.$id);
  }



  function get($tabel,$nama_id){
  return $this->db->query("SELECT * FROM ".$tabel." ORDER BY ".$nama_id);
  }

  function tampil_data_barang($tabel,$nama_id){
  return $this->db->query("SELECT * FROM ".$tabel." WHERE assets = '0' ORDER BY ".$nama_id);
}
public function tampilan_data($id)
{
return $this->db->query("SELECT * FROM distribusi_bhp
LEFT JOIN barang ON barang.id_barang = distribusi_bhp.id_barang
LEFT JOIN pegawai ON pegawai.id_pegawai = distribusi_bhp.id_pegawai WHERE assets = '0' AND distribusi_bhp.id_pegawai = ".$id." ORDER BY tgl_distribusi DESC");
}


public function tampilan_datas($id)
{
return $this->db->query("SELECT * FROM distribusi_bhp
LEFT JOIN barang ON barang.id_barang = distribusi_bhp.id_barang
LEFT JOIN pegawai ON pegawai.id_pegawai = distribusi_bhp.id_pegawai WHERE assets = '0' AND distribusi_bhp.id_distribusi = ".$id." ORDER BY tgl_distribusi DESC");
}



public function get_all_invertory()
{
  return $this->db->query('SELECT * FROM distribusi
LEFT JOIN barang ON barang.id_barang = distribusi.id_barang
LEFT JOIN pegawai ON distribusi.id_pegawai = pegawai.id_pegawai
LEFT JOIN ruang ON distribusi.id_ruang = ruang.id_ruang
LEFT JOIN user ON user.id_user =  distribusi.id_user ORDER BY id_distribusi DESC');
}
}
