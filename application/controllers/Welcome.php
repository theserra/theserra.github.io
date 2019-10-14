<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$data['title']		= "Theserra";

		$this->load->view('layout/header');

		$this->load->view('welcome_message', $data, FALSE);
		$this->load->view('layout/footer');
	}

	public function doctor()
	{
		$data['title']		= "Theserra";
		$this->load->view('layout/header');
		$this->load->view('doctors', $data);
		$this->load->view('layout/footer');
	}

	public function service()
	{
		$data['title']		= "Theserra";
		$this->load->view('layout/header');
		$this->load->view('services', $data);
		$this->load->view('layout/footer');
	}

	public function news()
	{
		$data['title']		= "Theserra";
		$this->load->view('layout/header');
		$this->load->view('news', $data);
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$data['title']		= "Theserra";
		$this->load->view('layout/header');
		$this->load->view('about', $data);
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$data['title']		= "Theserra";
		$this->load->view('layout/header_contact');
		$this->load->view('contact', $data);
		$this->load->view('layout/footer');
	}
}
