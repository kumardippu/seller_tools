<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
	    parent::__construct();
        /**
            * Check if the user is logged in, if he's not, 
            * send him to the login page
        */  
        if(!$this->session->userdata('is_logged_in')){
            redirect('login');
        }
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		date_default_timezone_set("UTC");	
		//$this->load->library('curl');	
		//echo base_url();
		/*
		// The current time. Needed to create the Timestamp parameter below.
		$now = new DateTime();

		$orderid = '108873442';
		// The parameters for our GET request. These will get signed.
		$parameters = array(
		    // The user ID for which we are making the call.
		    'UserID' => 'dippu.kumar@lazada.com.my',

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

		//$data = $this->curl->execute();
		print_r($data);

		$data_ar = json_decode($data,1);
		if(isset($data_ar['SuccessResponse'])){
		    print_r($data);exit;    
		}else{
		    //print_r($data);exit;  
		      echo $data_ar['ErrorResponse']['Head']['ErrorMessage'];  
		}
		*/
		$data['header'] = 'includes/header';
        $data['footer'] = 'includes/footer';
        $data['side_menu'] = 'includes/side_menu';
        $data['main_content'] = 'home';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);

		//$this->load->view('welcome_message');
	}
}
