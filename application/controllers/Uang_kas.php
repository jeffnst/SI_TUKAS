<?php
	/**
	* 
	*/
	class Uang_kas extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('Kas_mod');
			$this->model = $this->Kas_mod;
			$this->load->helper('url');
		}
		public function index()
		{
			$data['judul'] = "SI TUKAS";
			$this->load->view('header',$data);
			$this->load->view('isi');
			$this->load->view('home');
			$this->load->view('footer');
		}
		public function riwayat()
		{
			$data['judul'] = "SI TUKAS - Riwayat Transaksi";
			$pmm = $this->model->pemasukan();
			$pmk = $this->model->pengeluaran();
			$this->load->view('header',$data);
			$rows = $this->model->read();
			$this->load->view('isi');
			$this->load->view('riwayat', ['rows'=>$rows,
										  'pmm'=>$pmm,
										  'pmk'=>$pmk]);
			$this->load->view('footer');
		}
		public function tambah(){
			if (isset($_POST['ok'])) {
				$jenis = $this->input->post('jenis');
				$jumlah = $this->input->post('jumlah');
				$auth = "1";
				$tanggal = date('Y-m-d');
				$keterangan = $this->input->post('ket');
				$data = [
					'id_tx' => '',
					'jenis_tx' => $jenis,
					'jumlah' => $jumlah,
					'keterangan' => $keterangan,
					'tanggal' => $tanggal,
					'auth' => $auth
				];
				$this->model->input($data, 'transaksi');
				redirect('Uang_kas/riwayat');
			}else{
				$data['judul'] = "SI TUKAS - Tambah Transaksi";
				$this->load->view('header',$data);
				$this->load->view('isi');
				$this->load->view('tambah');
				$this->load->view('footer');
				
			}
		}
		public function reset(){
			$this->model->reset();
			redirect('Uang_kas/riwayat');
		}
	}
?>