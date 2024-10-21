<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 */

class Profil extends CI_Controller {

	function index()
	{
		$this->load->view('public/index');
	}
}
