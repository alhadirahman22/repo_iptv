<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_customer extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    public function loadDataTable()
    {
    	$sql = 'select a.*,datediff(CURDATE(), a.Expired) as DaysExpired
    			from iptv.customer as a
    	';
        $query = $this->db->query($sql)->result_array();
        $data = array();
        for ($i=0; $i <count($query) ; $i++) { 
            $nestedData = array();
            $row = $query[$i];
            $nestedData[] = $i+1;
            foreach ($row as $key => $value) {
            	if ($key != 'ID') {
            		$nestedData[] = $value;
            	}
            }
 
            $nestedData[] = $row['ID'];
            $token = $this->jwt->encode($row,"UAP)(*");
            $nestedData[] = $token;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw"            => intval( 0 ),
            "recordsTotal"    => intval(count($query)),
            "recordsFiltered" => intval( count($query) ),
            "data"            => $data
        );
        return $json_data;
    }

}