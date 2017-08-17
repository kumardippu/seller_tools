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
        $this->load->model(array('log_model','api_model','order_model'));
    }
   
	function index($status='pending'){
       // $this->order_model->deleteDuplicateOrderItmeLog();
        //$data = $this->api_model->getOrderItems('108873442');

       // Here should be data delete code
       $userid = $this->session->userdata('userid');
       $this->order_model->deleteOrderItems($userid);
       //GetOrders API Call
       $order_data = $this->api_model->getOrders($status);
       $orderDatas =  $this->apiDataProcessor($order_data,TRUE);
       $totalOrders = 0;
       //$data_ar = json_decode($order_data,1);
       if(isset($orderDatas['error']) && $orderDatas['error']==FALSE){
            $data['error'] =  FALSE;
            $orders = array();

            $totalOrders = $orderDatas['count'];
            $orders = $orderDatas['data']['Orders'];

            if(count($orders)>0){
                foreach ($orders as $val) {
                    $order_no = $val['OrderNumber'];
                    $order_id = $val['OrderId'];

                    $order_item_datas = $this->api_model->getOrderItems($order_id);
                    $order_item_data  = $this->apiDataProcessor($order_item_datas,FALSE);
                    
                    if(isset($order_item_data['error']) && $order_item_data['error']==FALSE){
                         $orderItems = $order_item_data['data']['OrderItems'];
                         if(count($orderItems)>0){
                            foreach ($orderItems as $val) {
                                if($val['TrackingCode']!=''){   
                                    $delivery_type =  $this->deliveryType(trim($val['ShippingType']));  

                                    $save['order_no']           = $order_no;                               
                                    $save['order_id']           = $val['OrderId'];  
                                    $save['item_id']            = $val['OrderItemId'];  
                                    $save['tracking_no']        = $val['TrackingCode'];  
                                    $save['delivery_type']      = $delivery_type;//$val['ShippingType']; 
                                    $save['shipping_provider']  = $val['ShipmentProvider'];  
                                    $save['user_id']            = $userid;  
                                    $save['created_at']         = date('Y-m-d H:i:s');

                                    if($this->order_model->storeOrderItems($save)){
                                        $this->log_model->writeEventLog(json_encode($save),'OrderItems Inserted');
                                        //success log  
                                    }else{
                                        $this->log_model->writeEventLog(json_encode($save)."| MySQL Error |".$this->db->_error_message(),'OrderItems Not Inserted | MySQL Problem');
                                    }
                             }
                                //echo "<br>";exit;
                            }//OrderItems for each
                         }else{ //OrderItems count
                            $this->log_model->writeEventLog(json_encode($orderItems)."|user_id:".$userid,'No any OrderItems');
                         }
                    }else{
                         // Order items error log
                        $this->log_model->writeEventLog(json_encode($order_item_data)." | user_id:".$userid,'API issue | OrderItems');
                        //$order_item_data['error_msg']
                    }
                }
            }else{
                // no orders log
                 $this->log_model->writeEventLog(json_encode($orders)."|user_id:".$userid,'No any Orders');
            }

        }else{
            // Orders API error log
            $this->log_model->writeEventLog(json_encode($orderDatas)." | user_id:".$userid,'API issue | Orders');
            //$order_item_data['error_msg']
            $data['error'] =  TRUE;
            $data['error_msg'] = $orderDatas['error_msg'];  
        }
        $data['orderCount'] = $totalOrders;
        $data['orders']     = $this->order_model->getOrderItemsByUser($userid,1);
       // print_r($data);exit;

        $data['header'] = 'includes/header';
        $data['footer'] = 'includes/footer';
        $data['side_menu'] = 'includes/side_menu';
        $data['main_content'] = 'order';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);

       // $this->load->view('home',$data);
	}

    function rts(){
        $userid = $this->session->userdata('userid');
        $result_data = array(); $i =0;
        if ($this->input->server('REQUEST_METHOD') === 'POST'){

            $data['show_result']  = TRUE;
            $tn = $this->input->post('tn');
            $tn_ar = explode(PHP_EOL,$tn);
           // $tn_ar = explode(',',$tn);
            if(count($tn_ar>0)){
                $track_no = ''; 
                foreach ($tn_ar as $val) {
                    if($val!=''){
                        $track_no = trim($val);
                        //print_r($);exit;
                        $result_data[$i]['tn'] = $track_no;
                        
                        $rts_data = $this->order_model->getRTSData($val);

                        //print_r($rts_data);exit;
                        if(count($rts_data)>0){
                            $itemids = array();
                            foreach ($rts_data as $val) {
                                $itemids[]   =  $val['item_id'];
                            }
                            $api_data['delivery_type'] = $rts_data[0]['delivery_type'];
                            $api_data['shipping_provider'] = $rts_data[0]['shipping_provider'];
                            $api_data['tracking_no'] = $track_no;
                            $api_data['itemids'] = implode(',',$itemids);
                            //SetStatusToReadyToShip API call here
                            $rts_api_return = $this->api_model->rtsAction($api_data);

                            $order_item_data =  $this->apiDataProcessor($rts_api_return,FALSE);
                            
                            $result_data[$i]['order_on'] = $rts_data[0]['order_no'];
                            
                            if(isset($order_item_data['error']) && $order_item_data['error']==FALSE){
                                    $orderItems = $order_item_data['data']['OrderItems'];
                                    //print_r($orderItems);
                                    $save['order_no']           = $rts_data[0]['order_no'];
                                    $save['order_id']           = $rts_data[0]['order_id'];
                                    $save['delivery_type']      = $api_data['delivery_type'];
                                    $save['shipping_provider']  = $api_data['shipping_provider'];
                                    $save['tracking_no']        = $api_data['tracking_no'];
                                    $save['itemids']            = $api_data['itemids'];
                                    $save['user_id']            = $userid;
                                    $save['PurchaseOrderId']    = $orderItems[0]['PurchaseOrderId'];
                                    $save['PurchaseOrderNumber']= $orderItems[0]['PurchaseOrderNumber'];
                                    
                                    if($this->order_model->storeRTSData($save)){
                                        //Data has been inserted
                                        $this->log_model->writeEventLog(json_encode($save),'RTS Data Inserted');
                                    }else{
                                        //MySQL error log
                                        $this->log_model->writeEventLog(json_encode($save)."| MySQL Error |".$this->db->_error_message(),'RTS Data Not Inserted | MySQL Problem');
                                    }
                                    $result_data[$i]['action'] = 'Success';
                            }else{
                                //API Error Log                                 // Order items error log
                                $this->log_model->writeEventLog(json_encode($order_item_data)." |API Data|".json_encode($api_data)." | user_id:".$userid,'API issue | SetStatusToReadyToShip');
                                    //print_r($order_item_data);
                                $result_data[$i]['order_on'] = '-';
                                $result_data[$i]['action'] = 'Error | '.$order_item_data['error_msg'];
                            }
                        }else{ // If balnk RTS check
                            //Blank RTS Data  
                             $result_data[$i]['order_on'] = '-';
                             $result_data[$i]['action'] = 'Error | Tracking number does not exist in Seller Center.';
                             $this->log_model->writeEventLog(json_encode($rts_data)."| user_id:".$userid,'No Data against TN '.$track_no.'| order_model-getRTSData()');

                        }
                        
                    }else{ //If blank TN
                        //Blank TN
                        //Blank RTS Data  
                        $this->log_model->writeEventLog('Blank TN no'."| user_id:".$userid,'Blank TN | RTS');
                    }
                    $i++;
                }//Foreach TN no
              }else{//TN no count check
                //Blank form post
                $this->log_model->writeEventLog(json_encode($this->input->post())."| user_id:".$userid,'Blank RTS form submit');
              }
            // print_r($result_data);
            

            }else{//If post
              $data['show_result']  = FALSE;    

            }
            //exit;
         //$result_data   = array('tn'=>'asdfasdf','order_no'=>'96986798','action'=>'Success');
         $data['results']  = $result_data;

        
         /*print_r($data);exit;*/
        $data['header'] = 'includes/header';
        $data['footer'] = 'includes/footer';
        $data['side_menu'] = 'includes/side_menu';
        $data['main_content'] = 'rts';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);
    }

    /**
      * This is for the API data processing
    **/
    function apiDataProcessor($apiData,$count=FALSE){
        //print_r($apiData);
        $data_ar = json_decode($apiData,1);
        if(isset($data_ar['SuccessResponse'])){
            $data['error'] =  FALSE;
            $data['count'] = 0;
            if($count==TRUE){
                 $data['count'] = $data_ar['SuccessResponse']['Head']['TotalCount'];     
            }
            $data['data'] = $data_ar['SuccessResponse']['Body'];//['Orders'];
        }else{
            $data['error'] =  TRUE;
            $data['error_msg'] = $data_ar['ErrorResponse']['Head']['ErrorMessage'];  
        }

        return $data;
    }

     function deliveryType($str){
        $delivery_type = $str;
        $data = strtolower($str);
        switch ($data) {
            case $data=='dropshipping':
                return $delivery_type = 'dropship';
                break;
            case $data=='pickup':
               return $delivery_type = 'pickup';
                break;
            case $data=='send to warehouse':
              return  $delivery_type = 'send_to_warehouse';
                break;
            default:
              return $delivery_type;
        }
    }


}