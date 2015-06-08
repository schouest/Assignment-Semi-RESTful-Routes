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

	public function edit_product($id){
		$this->load->model('product');
		$product=$this->product->get_product_by_id($id);
		$this->load->view('editproduct',array('product'=>$product));
	}

	public function show_product($id){
		$this->load->model('product');
		$product=$this->product->get_product_by_id($id);
		$this->load->view('showproduct',array('product'=> $product));
	}

	public function create(){
		$this->load->model('product');
		$product=$this->product->add_product($this->input->post());
		redirect("/");
	}

	public function destory($id){
		redirect("/");
	}

	public function update(){

	}
}
