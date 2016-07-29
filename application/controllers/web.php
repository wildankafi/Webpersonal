<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('index.php');
	}

}

/* End of file web.php */
/* Location: ./application/controllers/web.php */

?>