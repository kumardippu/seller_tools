<?php
class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model(array('user_model','log_model'));
        $this->load->library('form_validation');
    }
    /**
    * Check if the user is logged in, if he's not,
    * send him to the login page
    * @return void
    */
	function index(){
		if($this->session->userdata('is_logged_in')){
			redirect('home');
            //$this->load->view('login');
        }else{
        	$this->load->view('login');
        }
	}
    /**
    * encript the password
    * @return mixed
    */
    function __encrip_password($password) {
        return md5($password);
    }

    /**
    * check the username and the password with the database
    * @return void
    */

	function validate_credentials(){
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $user_name = $this->input->post('user_name');

    		$password = $this->__encrip_password($this->input->post('password'));

    		$is_valid = $this->user_model->validate($user_name, $password);
            $userdata['userdata'] = $this->user_model->get_user_by_id($is_valid);
            //print_r($userdata);exit;
            $isadmin = FALSE;   $isSubAdmin = FALSE; $isSeller = FALSE;
            $array =   array_filter($userdata);
            if(!empty($array)){
    			$user_type =  $userdata['userdata']->user_type;

                if($user_type==1){
    				$isadmin = TRUE;
                }elseif ($user_type==2) {
                    $isSubAdmin=TRUE;
                }elseif ($user_type==3) {
                    $isSeller=TRUE;
                }
            }

    		if($is_valid && ($isadmin||$isSubAdmin) ){
    			$data = array(
    				'user_name' => $user_name,
    				'is_logged_in' => true,
                    'userid'       => $is_valid,
                    'name'         => $userdata['userdata']->name,
                    'api_key'      => $userdata['userdata']->api_key,
                    'seller_id'    => $userdata['userdata']->seller_id,
                    'access'       => $userdata['userdata']->user_type
    			);

    			$this->session->set_userdata($data);
    			redirect('admin/user');
    		}else if($is_valid && $isSeller){
                $data = array(
                    'user_name'    => $user_name,
                    'is_logged_in' => true,
                    'userid'       => $is_valid,
                    'name'         => $userdata['userdata']->name,
                    'api_key'      => $userdata['userdata']->api_key,
                    'seller_id'    => $userdata['userdata']->seller_id,
                    'access'       => $userdata['userdata']->user_type
                );

                $this->session->set_userdata($data);

                $this->log_model->writeEventLog(json_encode(array('userid'=>$is_valid,'ip'=>$_SERVER['REMOTE_ADDR'])),'Login');
                redirect('home');
            }else{// incorrect username or password
    			$data['message_error'] = TRUE;
                $log_data = $this->input->post();
                $log_data['ip'] = $_SERVER['REMOTE_ADDR'];
    			$this->log_model->writeEventLog(json_encode($log_data),'Login Error');
                $this->load->view('login',$data);
    		}
        }else{
            $data = array();
            $this->load->view('login',$data);
        }
	}

    function register(){
        //$this->load->helper('security'); // Used for xss_clean
        $refrenc_no = "";
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $value = $this->input->post('email',TRUE); //where TRUE enables the xss filtering
            $this->form_validation->set_rules('name', 'First Name', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|callback_isEmailExist');
            $this->form_validation->set_rules('api_key', 'API Key', 'required|callback_isAPIExist');
            $this->form_validation->set_rules('seller_id', 'Seller Short Code', 'required|callback_isCodeExist');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[25]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

            if ( $this->form_validation->run() ){
                    $refrenc_no    = "PMAY".time();
                    $data_to_store = array(
                        'name'      => $this->input->post('name'),
                        'email'     => $this->input->post('email'),
                        'api_key'   => $this->input->post('api_key'),
                        'userid'    => $this->input->post('email'),
                        'seller_id' => $this->input->post('seller_id'),
                        'password'  => md5($this->input->post('password')),
                        'user_type' => (!empty($this->input->post('user_type'))?$this->input->post('user_type'):3),
                        'created_on'=> date('Y-m-d H:i:s'),
                        'status'=> 1
                    );

                //if the insert has returned true then we show the flash message
                if($userid = $this->user_model->storeUser($data_to_store)){
                    //print_r($userid);exit;
                    $data['flash_message'] = TRUE;
                    $data_to_store['updated_on'] = '';
                    $data_to_store['id'] = $userid;
                   if( $this->user_model->storeUserFile($userid,$data_to_store)){
                        $this->session->set_flashdata('flash_message', 'created');
                   }
                   redirect('login');
                }else{
                    $data['flash_message'] = FALSE;
                    $data['is_signup'] = TRUE;

                    $this->log_model->writeEventLog(json_encode($data_to_store),'Registration Error');

                    print_r($data);exit;
                    $this->load->view('login',$data);

                }

            }else{
                $this->log_model->writeEventLog(json_encode($this->input->post())."|Error Message|".validation_errors(),'Registration Validation Error');
            }

        }

        $data['is_signup'] = TRUE;
        $this->load->view('login',$data);
    }

	/**
    * Destroy the session, and logout the user.
    * @return void
    */
	function logout(){
        $save = array(
              'user_id' =>  $this->session->userdata('userid'),
              'login_time' => date("Y-m-d H:i:s"),
              'action' => 'logout',
              'raw_data'  => json_encode($_SERVER)
             );
        $this->log_model->writeEventLog(json_encode(array('userid'=> $this->session->userdata('userid'),'ip'=>$_SERVER['REMOTE_ADDR'])),'Logout');
        $this->user_model->activity($save);
		$this->session->sess_destroy();
		redirect('login');
	}

    /**
      * Forgot password
    */
    function forgetPassword(){
        $json['error'] = true;
        $json['message'] = "Error! There are some technical issue";
        $userid = '';
        if ($this->input->server('REQUEST_METHOD') === 'POST'){

            $email = $this->input->post('email');

            if($this->user_model->isEmailExist($email)){
                $users = $this->user_model->getUserByEmail($email);
                $userid = $users->id;
            }

            $json['email'] = $email;

            if($userid!=''){
                $str = $this->passwordString();
                $encripted_pwd = $this->__encrip_password($str);
                $save['password']   = $encripted_pwd;
                $save['updated_on'] = date('Y-m-d H:i:s');
                if($this->user_model->update_user($userid,$save)){
                    $json['error'] = false;
                    $json['message'] = "Success! Please check your registered emaild";
                    $this->log_model->writeEventLog(json_encode($this->input->post())." |user_id : ".$userid."Password : ".$str."~~".$encripted_pwd,'|Forget Password|');
										$mailData['userid'] = $userid;
										$mailData['email'] = array($email);
										$mailData['subject'] = 'Forget Password';
										$mailData['message'] = 'Hi ,<br>Your new password is '.$str;
										$this->sendEmail($mailData);

                }else{
                    $json['error'] = true;
                    $json['message'] = "Error! There are some technical issue";
                }

            }else{
                $json['error'] = true;
                $json['message'] = "Error! User does not exist";
            }
         }

        $retun_data = json_encode($json);

         if($json['error']==true){
            $this->log_model->writeEventLog(json_encode($this->input->post())."||".$retun_data."userid :".$userid,'|Forget Password|');
        }

        echo $retun_data;
    }

    function isEmailExist($str){
        $count = $this->user_model->isEmailExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isEmailExist', 'Email already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function isCodeExist($str){
        $count = $this->user_model->isCodeExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isCodeExist', 'Seller Code already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function isAPIExist($str){
        $count = $this->user_model->isCodeExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isAPIExist', 'API Key already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function passwordString(){
        $chars = "acefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ2345789";
        $length = 6;
        return substr( str_shuffle( $chars ), 0, $length );
    }

    function sendEmail($data){
			$this->load->library('email');
			 $this->load->library('parser');

			$to = $data['email'];
			$subject = $data['subject'];
			$message = $data['message'];
			$message .= "<br><br><strong>Thanks & Regards!</strong><br>From Lazada Team";
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;

			$this->email->initialize($config);

			$this->email->from('dippu.kumar@lazada.com.my', 'Mass RTS Tools');
			//$this->email->from('you@example.com', 'Your Name', 'returned_emails@example.com');
			$this->email->set_mailtype('html');
			$this->email->to($to);
			
			//$this->email->cc('another@another-example.com');
			//$this->email->bcc('them@their-example.com');
			//$this->email->attach('/path/to/photo1.jpg');
			//$this->email->attach('http://example.com/filename.pdf');
			$this->email->subject($subject);
			$this->email->message($message);
			if($maildata = $this->email->send()){
					$this->log_model->writeEventLog(json_encode($data),'Send Email');
					return true;
			}else{
				$this->log_model->writeEventLog(json_encode($data),'Send Email | Error');
				return false;
			}
    }

}
