<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function index()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run()==TRUE)
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('MAdmin');
            $data = $this->MAdmin->login($email,$password);
            if($data)
            {
                if($data[0]['email']==$email && $data[0]['password']==$password)
                {
                    $userSession=array(
                        'userid'=>$data[0]['id'],
                        'isLoggedIn'=>TRUE
                    );
                    $this->session->set_userdata($userSession);
                    redirect('dashboard');
                }
                else{
                    $this->session->set_tempdata('login','Email OR Password did not matched',2);
                }
                
            }
            else{

            }
           
        }
		$this->load->view('admin/index');
    }
}
