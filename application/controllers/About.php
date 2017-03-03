<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Dyahdyana Tri Hartati",
			'alamat' => "Politeknik Negeri Malang",
			'jurusan' => "Teknologi Informasi",
			'nim' => "1541180113",
			'kelas' => "TI-2C",
			'telp' => "081333661918",
			'email'=> "dyahdyana18@gmail.com",
			'hobby' => "mendengarkan musik, makan",
			);
		$this->load->view('about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>