<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Coolpraz\PhpBlade\PhpBlade;

class Papu_Controller extends CI_Controller {
	protected $views = APPPATH . 'views';
	protected $cache = APPPATH . 'cache';
	protected $blade;

	public function __construct() {
		parent::__construct();
		$this->blade = new PhpBlade($this->views, $this->cache);
	}

	public function bcrypt($password) {
		return $this->bcrypt->hash_password($password);
	}
}

/* End of file Papu_Controller.php */
/* Location: ./application/core/Papu_Controller.php */