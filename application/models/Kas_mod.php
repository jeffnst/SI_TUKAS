<?php 
/**
* 
*/
class Kas_mod extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function read(){
		$query = $this->db->get('transaksi');
		return $query->result();
	}
	public function input($data, $table){
		$this->db->insert($table,$data);
	}
	public function pemasukan(){
		$pemasukan = $this->db->query("SELECT SUM(jumlah) AS pemasukan FROM transaksi WHERE jenis_tx = '1'");
		return $pemasukan->result();
	}
	public function pengeluaran(){
		$pengeluaran = $this->db->query("SELECT SUM(jumlah) AS pengeluaran FROM transaksi WHERE jenis_tx = '0'");
		return $pengeluaran->result();
	}
	public function reset(){
		$query = $this->db->query("TRUNCATE TABLE transaksi");
	}
}
?>