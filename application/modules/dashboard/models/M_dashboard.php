<?php

class M_dashboard extends CI_Model{


  function get_data($table,$where){
		return $this->db->get_where($table,$where);
	}

public function semua_barang()
{
  return $this->db->query('SELECT sum(jumlah_barang) as jumlah FROM barang');
}
public function semua_distribusi()
{
  return $this->db->query('SELECT sum(jumlah) as jumlah FROM distribusi');
}

public function semua_maintenage()
{
  return $this->db->query('SELECT count(id_maintenage) as jumlah FROM maintenage');
}
//
// public function semua_tps()
// {
//   return $this->db->query('SELECT count(id_desa) as jumlah FROM user WHERE id_desa >0');
// }
//
// function tps_lapor(){
// return $this->db->query("SELECT count(user.id_user) as jumlah FROM user LEFT JOIN t_desa ON t_desa.id_desa = user.id_desa LEFT JOIN perolehan ON perolehan.id_user = user.id_user WHERE status = 'user' AND paslon_1 > 0 ORDER BY nama_desa ASC,no_tps ASC");
// }


// function jumlahperolehan(){
// return $this->db->query("SELECT sum(paslon_1) as paslon_1, SUM(paslon_2) AS paslon_2, SUM(suaratak_sah) as suaratak_sah FROM perolehan");
// }
//
//
//
// function hasil_desa(){
// return $this->db->query("SELECT DISTINCT nama_desa ,id_desa FROM t_desa  ORDER BY nama_desa ASC");
// }
//
// public function jumlahhasil($id_desa)
// {
//   return $this->db->query('SELECT sum(paslon_1) as jumlah FROM t_desa LEFT JOIN user ON user.id_desa= t_desa.id_desa LEFT JOIN perolehan ON perolehan.id_user = user.id_user WHERE t_desa.id_desa = '.$id_desa);
// }
//
// public function jumlahsemua()
// {
//   return $this->db->query('SELECT sum(paslon_1) as jumlah FROM perolehan');
// }
//
//
// public function jumlahsemuakosong($id_desa)
// {
//   return $this->db->query('SELECT sum(paslon_2) as jumlah FROM t_desa LEFT JOIN user ON user.id_desa= t_desa.id_desa LEFT JOIN perolehan ON perolehan.id_user = user.id_user WHERE t_desa.id_desa = '.$id_desa);
// }
//
// function tampil_semua(){
// return $this->db->query("SELECT *, user.id_user as id_user  FROM user LEFT JOIN t_desa ON t_desa.id_desa = user.id_desa LEFT JOIN perolehan ON perolehan.id_user = user.id_user WHERE status = 'user' ORDER BY nama_desa ASC,no_tps ASC");
// }


}
