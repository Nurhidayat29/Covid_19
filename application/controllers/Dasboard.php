<?php
class Dasboard extends CI_Controller{
	public function index(){
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('p1');
		$this->load->view('template/footer');
	}
	public function jab1(){
		$this->load->view('template/header');
	
		$this->load->view('jab1');
		$this->load->view('template/footer');
	}
	public function p2(){
		$this->load->view('template/header');
	
		$this->load->view('p2');
		$this->load->view('template/footer');
	}
	public function jab2(){
		$this->load->view('template/header');
		
		$this->load->view('jab2');
		$this->load->view('template/footer');
	}
	public function p3(){
		$this->load->view('template/header');
	
		$this->load->view('p3');
		$this->load->view('template/footer');
	}
	public function jab3(){
		$this->load->view('template/header');
	
		$this->load->view('jab3');
		$this->load->view('template/footer');
	}
	public function p4(){
		$this->load->view('template/header');
		
		$this->load->view('p4');
		$this->load->view('template/footer');
	}
	public function jab4(){
		$this->load->view('template/header');
	
		$this->load->view('jab4');
		$this->load->view('template/footer');
	}
	public function p5(){
		$this->load->view('template/header');

		$this->load->view('p5');
		$this->load->view('template/footer');
	}
	public function jab5(){
		$this->load->view('template/header');
		
		$this->load->view('jab5');
		$this->load->view('template/footer');
	}
	public function p6(){
		$this->load->view('template/header');
	
		$this->load->view('p6');
		$this->load->view('template/footer');
	}
	public function kesimpulan(){
		$this->load->view('template/header');
	
		$this->load->view('kesimpulan');
		$this->load->view('template/footer');
	}




}

 ?>
