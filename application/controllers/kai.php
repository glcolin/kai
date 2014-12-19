<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kai extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	// index page
	function index(){	
		$data['page_title'] = "Kai Liu Photography - KaiLiu Visual";
		//load view
		$data_view['page'] = 'index';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}

	// video page
	function video(){
		$data['page_title'] = "video - KaiLiu Visual";
		//load view
		$data_view['page'] = 'video';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}
	// testimonials page
	function testimonials(){
		$data['page_title'] = "testimonials - KaiLiu Visual";
		//load view
		$data_view['page'] = 'testimonials';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}
	// about page
	function about(){
		$data['page_title'] = "about - KaiLiu Visual";
		//load view
		$data_view['page'] = 'about';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}
	// contact page
	function contact(){
		$data['page_title'] = "contact - KaiLiu Visual";
		//load view
		$data_view['page'] = 'contact';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}
	// photo page
	function photo(){
		$data['page_title'] = "photo - KaiLiu Visual";
		//load view
		$data_view['page'] = 'photo';
		$data_view['data'] = $data;
		$this->load->view('template', $data_view);
	}


}