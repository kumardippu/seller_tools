<?php 
class Api_model extends CI_Model {
    function __construct(){
        $this->load->library('curl');
        date_default_timezone_set("UTC");   
    }

    function getOrders($status='pending'){
         // The current time. Needed to create the Timestamp parameter below.
        $now = new DateTime();
       // The parameters for our GET request. These will get signed.
        $parameters = array(
            // The user ID for which we are making the call.
            'UserID' => $this->session->userdata('user_name'),
            // The API version. Currently must be 1.0
            'Version' => '1.0',

            // The API method to call.
            'Action' => 'GetOrders',

           // 'SellerShortCode'=>'MY10RW4',

            // The format of the result.
            'Format' => 'json',

            // The current time formatted as ISO8601
            'Timestamp' => $now->format(DateTime::ISO8601),
            'Status' => $status, // Possible values are pending, canceled, ready_to_ship, delivered, returned, shipped and failed.
            //'CreatedAfter' => $createdAfter
            'Limit' => 100
        );

        // Sort parameters by name.
        ksort($parameters);

        // URL encode the parameters.
        $encoded = array();
        foreach ($parameters as $name => $value) {
            $encoded[] = rawurlencode($name) . '=' . rawurlencode($value);
        }

        // Concatenate the sorted and URL encoded parameters into a string.
        $concatenated = implode('&', $encoded);

        // The API key for the user as generated in the Seller Center GUI.
        // Must be an API key associated with the UserID parameter.
        $api_key = '3w-1-953aa7rDtARldex1wfsKZW_bsizqKMFzv-kwcNAZruagDfIAhtM';

        // Compute signature and add it to the parameters.
        $parameters['Signature'] = rawurlencode(hash_hmac('sha256', $concatenated, $api_key, false));

        // ...continued from above

        // Replace with the URL of your API host.
        $url = "https://api.sellercenter.lazada.com.my/";

        // Build Query String
        $queryString = http_build_query($parameters, '', '&');

        $this->curl->option(CURLOPT_FOLLOWLOCATION, 1);
        $this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
        $data = $this->curl->simple_post($url."?".$queryString); 

        return $data;
        //$data = $this->curl->execute();
        //print_r($data);

       /* $data_ar = json_decode($data,1);
        if(isset($data_ar['SuccessResponse'])){
            print_r($data);exit;    
        }else{
            //print_r($data);exit;  
              echo $data_ar['ErrorResponse']['Head']['ErrorMessage'];  
        }*/
    }  
   function getOrderItems($orderid=''){
        // The current time. Needed to create the Timestamp parameter below.
        $now = new DateTime();

        // The parameters for our GET request. These will get signed.
        $parameters = array(
            // The user ID for which we are making the call.
            'UserID' => $this->session->userdata('user_name'),//'dippu.kumar@lazada.com.my',

            // The API version. Currently must be 1.0
            'Version' => '1.0',

            // The API method to call.
            'Action' => 'GetOrderItems',
            'OrderId' => $orderid,
           // 'SellerShortCode'=>'MY10RW4',

            // The format of the result.
            'Format' => 'json',

            // The current time formatted as ISO8601
            'Timestamp' => $now->format(DateTime::ISO8601)

        );

        // Sort parameters by name.
        ksort($parameters);

        // URL encode the parameters.
        $encoded = array();
        foreach ($parameters as $name => $value) {
            $encoded[] = rawurlencode($name) . '=' . rawurlencode($value);
        }

        // Concatenate the sorted and URL encoded parameters into a string.
        $concatenated = implode('&', $encoded);

        // The API key for the user as generated in the Seller Center GUI.
        // Must be an API key associated with the UserID parameter.
        $api_key = $this->session->userdata('api_key');//'3w-1-953aa7rDtARldex1wfsKZW_bsizqKMFzv-kwcNAZruagDfIAhtM';

        // Compute signature and add it to the parameters.
        $parameters['Signature'] = rawurlencode(hash_hmac('sha256', $concatenated, $api_key, false));

        // ...continued from above

        // Replace with the URL of your API host.
        $url = "https://api.sellercenter.lazada.com.my/";

        // Build Query String
        $queryString = http_build_query($parameters, '', '&');

        $this->curl->option(CURLOPT_FOLLOWLOCATION, 1);
        $this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
        $data = $this->curl->simple_post($url."?".$queryString); 
        return $data;
        //$data = $this->curl->execute();
        //print_r($data);

       /* $data_ar = json_decode($data,1);
        if(isset($data_ar['SuccessResponse'])){
            print_r($data);exit;    
        }else{
            //print_r($data);exit;  
              echo $data_ar['ErrorResponse']['Head']['ErrorMessage'];  
        }*/
    }
          
}