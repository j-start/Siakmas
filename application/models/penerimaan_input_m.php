<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class penerimaan_input_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GetTable($tabel)

	{

		$data=$this->db->get($tabel);

		return $data->result_array();

	}

	public function InsertData($tabel, $data) {

		$res = $this->db->insert($tabel, $data);

		return $res;

	}

	public function UpdateData($tabel, $data, $pk, $id) {

		$this->db->where($pk,$id);

		$res = $this->db->update($tabel,$data);

		return $res;

	}

	public  function getByID($tabel,$pk,$id){

		$this->db->where($pk,$id);

		return $this->db->get($tabel);

	}

}

/* End of file penerimaan_input-m.php */
/* Location: ./application/models/penerimaan_input-m.php */