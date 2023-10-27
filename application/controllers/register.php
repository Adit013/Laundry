<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('vw_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('id', 'id','trim|required|min_length[1]|max_length[32]|is_unique[user.id]');
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[64]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[64]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('name', 'name','trim|required|min_length[1]|max_length[32]');
		if ($this->form_validation->run()==true)
	   	{
			$id = $this->input->post('id');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('name');
			$this->auth->register($id,$email,$username,$password,$nama);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}