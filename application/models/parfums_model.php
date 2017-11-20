<?php 
/**
* 
*/
class parfums_model extends CI_Model
{
	public $nama_table	='tb_parfum';
	public $id		 	='kode_parfum';
	public $order		='DESC';


	function __construct()
	{
		parent::__construct();	


	}

	//untuk mengambil data seluruh parfum
	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();

	}


	//untuk mengambil data per id seluruh mahasiswa
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();

	}


	//Untuk menambahkan data ke table mahasiswa
	function tambah_data($data) {

		return $this->db->insert($this->nama_table, $data);
	
	}

//Untuk menghapus data table mahasiswa
	function hapus_data($id) {

		 $this->db->where($this->id, $id);
		 $this->db->delete($this->nama_table);
	
	}

//Untuk mengedit data table mahasiswa
	function edit_data($id,$data) {

		 $this->db->where($this->id, $id);
		 $this->db->update($this->nama_table,$data);
	
	}

	

}
 ?>