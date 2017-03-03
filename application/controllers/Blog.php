<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		echo "<h1>hello World</h1>";
	}

	 public function category($halaman,$nama)
	{
		# code...
		echo "<h1>Halaman Category </h1>";
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
?>