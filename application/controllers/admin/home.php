<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
   
	public function index(){
		$data = array (
			'judul_halaman' => 'Dashboard'
		);
	
		$this->template->load('admin/template','admin/dashboard', $data);
	}
}