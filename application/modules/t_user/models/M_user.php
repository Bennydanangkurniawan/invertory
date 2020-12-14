<?php

class M_user extends CI_Model{


  function get_data($table,$where){
		return $this->db->get_where($table,$where);
	}

  function tampil_data($tabel){
  return $this->db->query("SELECT * FROM user ORDER BY id_user ");
}
function list_data($id){
return $this->db->query("SELECT * FROM user LEFT JOIN t_desa ON t_desa.id_desa = user.id_desa WHERE t_desa.id_desa=".$id." ORDER BY no_tps ASC");
}




function input_data($data,$table){
		$this->db->insert($table,$data);
	}


  public function get_datas($id)
  {
    return $this->db->query('SELECT * FROM user
WHERE id_user ='.$id);
  }


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


  function hapus_data($where,$table){
  	$this->db->where($where);
  	$this->db->delete($table);
  }



}
