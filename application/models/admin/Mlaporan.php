<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaporan extends CI_Model {
	function laporan_harian($input)
	{
		$this->db->join('member', 'pemesanan.id_member = member.id_member');
		$this->db->where('tanggal_pemesanan', $input['tanggal']);
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function laporan_cetak_harian($tanggal)
	{
		$this->db->join('member', 'pemesanan.id_member = member.id_member');
		$this->db->where('tanggal_pemesanan', $tanggal);
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function laporan_mingguan($input)
	{
		$awal = $input['tanggal_awal'];
		$akhir = $input['tanggal_akhir'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member WHERE tanggal_pemesanan BETWEEN '$awal' AND '$akhir'");
		return $ambil->result_array();
	}
	function laporan_bulan($input)
	{
		$bulan = $input['bulan'];
		$tahun = $input['tahun'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member
			WHERE MONTH(tanggal_pemesanan)='$bulan' AND YEAR(tanggal_pemesanan)='$tahun'");
		return $ambil->result_array();
	}
	function laporan_tahun($input)
	{
		$tahun = $input['tahun'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member WHERE YEAR(tanggal_pemesanan)='$tahun'");
		return $ambil->result_array();
	}
	

}

/* End of file Mlaporan.php */
/* Location: ./application/models/admin/Mlaporan.php */