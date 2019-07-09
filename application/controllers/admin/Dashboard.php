<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin {

	public function __construct(){
		parent::__construct();
	}
  
    public function index()
    {
        $title = 'Dashboard';
        $this->load->view('admin/header',['title'=>$title]);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata($userSession);
        redirect('admin/index');
    }
}
