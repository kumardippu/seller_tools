<?php
class Order extends CI_Controller {
	public function __construct(){
        parent::__construct();
        /**
            * Check if the user is logged in, if he's not, 
            * send him to the login page
        */  
        if(!$this->session->userdata('is_logged_in')){
            redirect('login');
        }
        $this->load->library('curl');   
        $this->load->model(array('log_model','api_model'));
    }
   
	function index($status='pending'){
	   //echo "Welcome to the Home";
       //print_r($_SESSION);
        //$data = $this->api_model->getOrderItems('108873442');
       $order_data = $this->api_model->getOrders($status);
       $totalOrders = 0;
       $data_ar = json_decode($order_data,1);
       if(isset($data_ar['SuccessResponse'])){
            $data['error'] =  FALSE;
            $orders = array();
            $totalOrders = $data_ar['SuccessResponse']['Head']['TotalCount'];
           // echo $totalOrders;
            //print_r($data_ar['SuccessResponse']['Body']);exit;
            //print_r($data_ar['SuccessResponse']['Body']['Orders']);exit;
            //$orders = $data_ar['SuccessResponse']['Body']['Orders'];
            if(count($orders)>0){
                foreach ($orders as $val) {
                    //print_r($val['OrderId']);
                    $order_item_data = $this->api_model->getOrderItems($val['OrderId']);
                    //print_r($order_item_data);
                    //echo "<br>";
                }
            }

        }else{
            $data['error'] =  TRUE;
            $data['error_msg'] = $data_ar['ErrorResponse']['Head']['ErrorMessage'];  
        }

        $data['orderCount'] = $totalOrders;

        //print_r($data);

        $data['header'] = 'includes/header';
        $data['footer'] = 'includes/footer';
        $data['side_menu'] = 'includes/side_menu';
        $data['main_content'] = 'order';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);

       // $this->load->view('home',$data);
	}
}