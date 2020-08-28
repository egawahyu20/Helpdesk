<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_DB extends CI_Model {

	public function index(){
		/*$query=$this->db -> get('tblmhs');
		return $query ->result_array();*/
	}

	public function dropdown_level()
    {
		//$query=$this->db -> get('level');

		/*$sql = "SELECT * FROM level";
        $query = $this->db->query($sql);*/

        /*$this->db->order_by('level', 'asc');
        $query = $this->db->get('level');

        //return $sql;

		$value[''] = '-- PILIH --';

		foreach ($query ->result_array() as $row) {
            $value[$row->id_level] = $row->nama_level;
		} ;      */

		$value = array(
			'1' => 'Admin' ,
			'2' => 'Karyawan' ,
			'3' => 'Teknisi' , 
		);
            
    	return $value;
    }

	public function getmhsnilai(){

		return 'JANCOK';
		/*$this->db->select('*')
			->from('tblmhs')
			->join('tblnilaimhs n','m.nim=n.nim_mahasiswa','inner');
			$get= $this->db->get();
			return $get->result();*/
	}


	/*public function getmhsnilai(){
		$this->db->select('m.nim,m.namamhs,m.alamat,n.ujianke,n.nilaiujian')
			->from('tblmhs m')
			->join('tblnilaimhs n','m.nim=n.nim_mahasiswa','inner');
			$get= $this->db->get();
			return $get->result();
	}
*/


}
