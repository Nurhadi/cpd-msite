<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function daftar()
	{
		$this->load->view('pendaftaran_view');
	}

	public function upload_bukti_pembayaran()
	{
		$this->load->view('upload_bukti_pembayaran_view');
	}
}

/* End of file peserta.php */
/* Location: ./application/controllers/peserta.php */