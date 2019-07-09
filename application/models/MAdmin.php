<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username,$password)
    {
        $data = array('email'=>$username,'password'=>$password);
        $get = $this->db->where($data)
                    ->get('admin');
        
        $result = $get->result_array();

        return $result;
    }
}