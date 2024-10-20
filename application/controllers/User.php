<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct(); //
    }

	function index()
	{
		$this->load->view('public/components/mainHeader');
		$this->load->view('public/components/navbar');
		$this->load->view('public/page/index');
		$this->load->view('public/components/footer');
	}
}
