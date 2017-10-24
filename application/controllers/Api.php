<?php
/**
  * Developed By : Dippu Kumar
**/
 header('Access-Control-Allow-Origin: *');
class Api extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model(array('api_model'));
    }
   
  function getEmployee($id='',$isreport=''){
  	$emp = array(); $reportee = array(); $search = '';
  	if(isset($_GET) && isset($_GET['name']) ){
  		$search = trim($_GET['name']);
  	}
  	if($id==''){
  		$emp = $this->api_model->getEmployees($id);
  	}else{
  		$emp = $this->api_model->getEmployee($id);	
  	}

  	if($search!=''){
  		$emp = $this->api_model->searchEmployee($search);	
  		//print_r($emp);exit;
  }


  	if($isreport!=''){
  		$reportee = $this->api_model->getReportee($id);
  		$emp->reports = $reportee;
  	}

  	
  	echo json_encode($emp);
  } 
 
}