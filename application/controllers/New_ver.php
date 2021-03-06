<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_ver extends CI_Controller {
	public function home()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_home');
		$this->load->view('menu_footer');
	}
	public function shuttle()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_shuttle');
		$this->load->view('menu_footer');
	}
	public function rank_page()
	{
		$this->load->view('menu_header');
		$this->load->view('rank_page');
		$this->load->view('menu_footer');
	}
	public function menu()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_menu');
		$this->load->view('menu_footer');
	}
	public function link()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_link');
		$this->load->view('menu_footer');
	}
	public function more()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_more');
		$this->load->view('menu_footer');
	}
	public function help()
	{
		$this->load->view('menu_header');
		$this->load->view('menu_help');
		$this->load->view('menu_footer');
	}
	public function foodmap(){
		$this->load->view('menu_header');
		$this->load->view('more_map');
		$this->load->view('menu_footer');
	}
	public function notice(){
		$this->load->model("data_model");
		$result['notice']=$this->data_model->getNotice();
		$this->load->view('menu_header');
		$this->load->view('more_notice',$result);
		$this->load->view('menu_footer');
	}
	public function phonebook(){
		$this->load->view('menu_header');
		$this->load->view('more_phonebook');
		$this->load->view('menu_footer');
	}
	public function delivery(){
		$this->load->view('menu_header');
		$this->load->view('more_delivery');
		$this->load->view('menu_footer');
	}

	public function printhub(){
			$this->load->helper('url');
		redirect('http://freshman.yonsei.ac.kr/prints');
	}
	public function normal_shuttle(){
		$this->load->view('menu_header');
		$this->load->view('normal_shuttle');
		$this->load->view('menu_footer');
	}
	public function gorilla_shuttle(){
			$this->load->view('menu_header');
			$this->load->view('gorilla_shuttle');
			$this->load->view('menu_footer');
	}
}
