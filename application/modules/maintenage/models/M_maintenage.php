<?php

class M_maintenage extends CI_Model{


  function get_data($table,$where){
		return $this->db->get_where($table,$where);
	}

  function tampil_data($tabel,$nama_id){
  return $this->db->query("SELECT * FROM ".$tabel." ORDER BY ".$nama_id);
}

function tampil_data_all($tabel,$nama_id){
return $this->db->query("SELECT * FROM ".$tabel." LEFT JOIN distribusi ON distribusi.id_distribusi = maintenage.id_distribusi LEFT JOIN barang ON barang.id_barang = distribusi.id_barang LEFT JOIN pegawai ON pegawai.id_pegawai = distribusi.id_pegawai LEFT JOIN jenis_maintenage ON jenis_maintenage.id_jenis_maintenage = maintenage.id_jenis_maintenage ORDER BY ".$nama_id);

}


function list_data($id){
return $this->db->query("SELECT * FROM user LEFT JOIN t_desa ON t_desa.id_desa = user.id_desa WHERE t_desa.id_desa=".$id." ORDER BY no_tps ASC");
}




function input_data($data,$table){
		$this->db->insert($table,$data);
	}


  public function get_datas($id)
  {
    return $this->db->query("SELECT * FROM maintenage LEFT JOIN distribusi ON distribusi.id_distribusi = maintenage.id_distribusi LEFT JOIN barang ON barang.id_barang = distribusi.id_barang LEFT JOIN pegawai ON pegawai.id_pegawai = distribusi.id_pegawai LEFT JOIN jenis_maintenage ON jenis_maintenage.id_jenis_maintenage = maintenage.id_jenis_maintenage LEFT JOIN ruang ON distribusi.id_ruang = ruang.id_ruang WHERE id_maintenage= ".$id);

  }


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


  function hapus_data($where,$table){
  	$this->db->where($where);
  	$this->db->delete($table);
  }

  public function get_distri()
  {
    return $this->db->query('SELECT * FROM distribusi
  LEFT JOIN barang ON barang.id_barang = distribusi.id_barang
  LEFT JOIN pegawai ON distribusi.id_pegawai = pegawai.id_pegawai
  LEFT JOIN ruang ON distribusi.id_ruang = ruang.id_ruang
  LEFT JOIN user ON user.id_user =  distribusi.id_user ORDER BY id_distribusi DESC');
  }



}
