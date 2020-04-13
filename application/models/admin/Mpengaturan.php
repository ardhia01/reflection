<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengaturan extends CI_Model {
	function tampil_pengaturan()
	{
		$ambil = $this->db->get('pengaturan');
		return $ambil->result_array();
	}
	function ambil_pengaturan($id_pengaturan)
	{
		$this->db->where('id_pengaturan', $id_pengaturan);
		$ambil = $this->db->get('pengaturan');
		return $ambil->row_array();
	}
	function ubah_pengaturan($id_pengaturan,$input)
	{
		$this->db->where('id_pengaturan', $id_pengaturan);
		$this->db->update('pengaturan', $input);
	}
	function simpan_pengaturan($input)
	{
		$this->db->insert('pengaturan', $input);
	}
	
	

}

/* End of file Mpengaturan.php */
/* Location: ./application/models/admin/Mpengaturan.php */