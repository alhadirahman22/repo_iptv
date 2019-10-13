<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public $data = [];
    function __construct()
    {
        parent::__construct();
        $this->load->library('JWT');
    }

    public function template($content)
    {
        $this->data['include'] = $this->load->view('include','',true);
        $this->data['header'] = $this->load->view('header','',true);
        $this->data['content'] = $content;
        $this->data['navigation'] = $this->load->view('navigation','',true);
        $this->load->view('template',$this->data);
    }

    public function getInputToken()
    {
        $token = $this->input->post('token');
        $key = "UAP)(*";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }
}   