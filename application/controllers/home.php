<?php
/**
  * Developed By : Dippu Kumar
**/
class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        /**
            * Check if the user is logged in, if he's not, 
            * send him to the login page
        */  
        ini_set('max_execution_time',6000); //300 seconds = 5 minutes
        if(!$this->session->userdata('is_logged_in')){
            redirect('login');
        }
        $this->load->library('curl');   
        $this->load->model(array('log_model','api_model','order_model'));
    }
   
   function array_except($array, $keys) {
  return array_diff_key($array, array_flip((array) $keys));   
} 
	function index(){
       $userid = $this->session->userdata('userid');
       $today = date('Y-m-d');

       $total_rts_count      = $this->order_model->countRTSData();

       $total_user_rts_count = $this->order_model->countRTSData($userid);

       $total_rts_count_today = $this->order_model->countRTSDataByDate('',$today,$today);
       $total_user_rts_count_today = $this->order_model->countRTSDataByDate($userid,$today,$today);
    
       $data['total_rts_count']             = $total_rts_count;
       $data['total_user_rts_count']        = $total_user_rts_count;
       $data['total_rts_count_today']       = $total_rts_count_today;
       $data['total_user_rts_count_today']  = $total_user_rts_count_today;

        $graph_data = $this->order_model->getRTSDataForMonth();
        
        $data_ar = array();
        foreach ($graph_data as $key => $value) {
          $graph_data = array_values($value);
          $data_ar[] = $graph_data;
        }
        $data['graph']  = $data_ar;
        $data['header'] = 'includes/header';
        $data['footer'] = 'includes/footer';
        $data['side_menu'] = 'includes/side_menu';
        $data['main_content'] = 'dashboard';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);

       // $this->load->view('home',$data);
	}

 function testMail(){
    echo "string";
    $this->load->library('email');

    $config['protocol'] = 'sendmail';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;

    $this->email->initialize($config);

    $this->email->from('dippu.kumar@lazada.com.my', 'Test Dippu');
    //$this->email->from('you@example.com', 'Your Name', 'returned_emails@example.com');
    $to = array('kumardippu@gmail.com','dippu.kumar@lazada.com.my','prashan.selva@lazada.com.my');
    $this->email->to($to);
    //$this->email->cc('another@another-example.com');
    //$this->email->bcc('them@their-example.com');
    //$this->email->attach('/path/to/photo1.jpg');
    //$this->email->attach('http://example.com/filename.pdf');
    $this->email->subject('Email Test');
    $this->email->message('Testing the email class.');

    $maildata = $this->email->send();
    print_r($maildata);
  }

}