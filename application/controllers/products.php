<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		$this->load->model('product');
		$product=$this->product->get_all_product();
		$this->load->view('Index',array('product'=> $product));
		//redirect("/");
	}

	public function new_product(){
		$this->load->view('newproduct');
	}

	public function edit_product(){
		$this->load->view('editproduct');
	}

	public function show_product(){
		$this->load->view('showproduct');
	}

	public function create(){

	}

	public function destory(){

	}

	public function update(){

	}
}
