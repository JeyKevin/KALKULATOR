<?php 

	class web extends CI_Controller {

		function __construct(){
			parent :: __construct();
		}


		function index(){
			$data['judul']="Parsing Data Ke view";
			$data['isi']="Ini Adalah data dari controller";
			$this->load->view('hello',$data);
		}

	}



?>