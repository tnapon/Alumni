<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		echo "My Constucter"."<br>";
	}

	public function index()
	{
		// $data['name'] = "cococo";
		// $data['email'] = "cococo@gmail.com";
		$data['student'] = array("614259035","Coco","Software Engineering");
		$this->load->view('hello_view',$data);
	}

	public function show($name=null,$lastname=null) {
		echo "Hello ".$name," ".$lastname;
		$this->_display();
	}

	public function _display(){
		echo "</br>"."Software Engineeing";
	}
}
