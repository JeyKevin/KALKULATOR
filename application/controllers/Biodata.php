<?php 

	class Biodata extends CI_Controller {

		function __construct(){
			parent :: __construct();
		}


		function index(){
			$data['judul']="Parsing Data Ke view";
			$data['nama']="Yeremia Kevin Nugraha";
			$data['alamat']="Jl Jaksa Agung Suprapto";
			$data['jenis']="L";
			$data['asal']="SMK TI Pelita Nusantara";
			$this->load->view('profil',$data);
		}

	}



?>