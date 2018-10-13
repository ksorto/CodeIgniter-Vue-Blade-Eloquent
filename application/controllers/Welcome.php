<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Papu_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('migration');

        if ($this->migration->current() === FALSE) {
        	show_error($this->migration->error_string());
        }
	}

	public function index() {
		$users = User::get();
		echo $this->blade->view()->make('welcome_message', ['name' => 'Kevin Sorto', 'users' => $users]);
	}

	public function create() {
		User::create([
			'first_name' => 'Kevin',
			'last_name' => 'Sorto',
			'username' => 'ksorto',
			'email' => 'ksorto2@hotmail.com',
			'password' => $this->bcrypt('123456')
		]);
	}
}
