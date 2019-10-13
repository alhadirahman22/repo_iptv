<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends MY_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('m_customer');
	}
	public function index()
	{
		
		$data['InputForm'] = $this->load->view('customer/InputForm','',true);
		$data['ViewTable'] = $this->load->view('customer/ViewTable','',true);
		$content =$this->load->view('customer/index',$data,true);
		$this->template($content);
	}

	public function action(){
		function __construct()
	    {
	        parent::__construct();
	        $this->load->model('m_customer');
	    }
	}

	public function action_ajax()
	{
		header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        $Input = $this->getInputToken();
        $action = $Input['action'];
        if ($action == 'read') {
        	$rs = $this->m_customer->loadDataTable();
        	echo json_encode($rs);
        }
        elseif ($action == 'add') {
        	$dataSave = json_decode(json_encode($Input['data']));
        	$this->db->insert('iptv.customer',$dataSave);
        	echo json_encode(1);
        }
        elseif ($action == 'edit') {
        	$dataSave = json_decode(json_encode($Input['data']));
        	$ID = $Input['ID'];
        	$this->db->where('ID',$ID);
        	$this->db->update('iptv.customer',$dataSave);
        	echo json_encode(1);
        }
        elseif ($action == 'delete') {
        	$ID = $Input['ID'];
        	$this->db->where('ID',$ID);
        	$this->db->delete('iptv.customer');
        	echo json_encode(1);
        }
        else
        {
        	echo '{"status":"999","message":"Not Authorize"}'; 
        }
	}
}
