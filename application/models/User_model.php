<?php 
class User_model extends CI_Model {

        public function storeUser($data)
        {
                $insert = $this->db->insert('tbl_users', $data);
                return $this->db->insert_id();
        }

        public function storeUserFile($userid,$data){
            return file_put_contents(USER_PROFILE.$userid,json_encode($data).PHP_EOL,FILE_APPEND);
        }

        public function getUserFile($userid){
              return file_get_contents(USER_PROFILE.$userid);
        }

        public function get_users($limit_start=null, $limit_end=null,$count,$status=1,$isAdmin=1,$userid=0)
        {
             if($count){                    
                      $this->db->select('*');
                      $this->db->from('tbl_users');
                      $this->db->where('status',$status);
                      if($isAdmin==2){
                        $this->db->where('created_by',$userid);
                      }
                      $this->db->limit($limit_start, $limit_end);
                      $query = $this->db->get();
                      return $query->num_rows(); 
                  
              }else{
                    $this->db->select('*');
                    $this->db->from('tbl_users');
                    $this->db->where('status',$status);
                    if($isAdmin==2){
                        $this->db->where('created_by',$userid);
                    }
                    $this->db->limit($limit_start, $limit_end);                  
                    $this->db->order_by('is_paid','ASC');
                    $query = $this->db->get();
                    return $query->result();  
              }
        }

        
        public function end_user_search($limit_start=null, $limit_end=null,$count=false,$term=null)
        {
              if( !empty($term) ){
                      if($count){
                             $this->db->select('*');
                             $this->db->from('tbl_users');
                             $this->db->where('status',1);
                             if(!empty($term)){
                               $this->db->where('(refrence_no LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                             }
                             $query = $this->db->get();
                             return $query->num_rows();   
                      }else{
                             $this->db->select('*');
                             $this->db->from('tbl_users');
                             $this->db->where('status',1);
                             if(!empty($term)){
                                  $this->db->where('(refrence_no LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                             }

                             $this->db->limit($limit_start, $limit_end);                 
                             $this->db->order_by('id','ASC');
                             $query = $this->db->get();
                             return $query->result();           
                      } 
              } 
        }

        public function user_search($limit_start=null, $limit_end=null,$count,$usertype=null,$term=null)
        {
              if( !empty($term) ){
                      if($count){
                             $this->db->select('*');
                             $this->db->from('tbl_users');
                             if(!empty($term)){
                               $this->db->where('(refrence_no LIKE "%'.$term.'%" OR f_name LIKE "%'.$term.'%" OR l_name LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                             }else{
                               $this->db->where('access',$usertype);
                             }
                             $query = $this->db->get();
                             return $query->num_rows();   
                      }else{
                             $this->db->select('*');
                             $this->db->from('tbl_users');
                             if(!empty($term)){
                                        $this->db->where('(refrence_no LIKE "%'.$term.'%" OR f_name LIKE "%'.$term.'%" OR l_name LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                             }else{
                               $this->db->where('access',$usertype);
                             }
                             $this->db->limit($limit_start, $limit_end);                 
                             $this->db->order_by('is_paid','ASC');
                             $query = $this->db->get();
                             return $query->result();           
                      } 
              } 
        }

        function update_user($id, $data)
        {
                $this->db->where('id', $id);
                $this->db->update('tbl_users', $data);
                $report = array();
                $report['error'] = $this->db->_error_number();
                $report['message'] = $this->db->_error_message();
                if($report !== 0){
                        return true;
                }else{
                        return false;
                }
        }

        function isEmailExist($str){
          $this->db->select('id');
          $this->db->from('tbl_users');
          $this->db->where('email',$str);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }
        function isCodeExist($str){
          $this->db->select('id');
          $this->db->from('tbl_users');
          $this->db->where('seller_id',$str);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }

        function isAPIExist($str){
          $this->db->select('id');
          $this->db->from('tbl_users');
          $this->db->where('api_key',$str);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }

        /**
          * Validate the login's data with the database
          * @param string $user_name
          * @param string $password
          * @return void
        */
        function validate($user_name, $password){
          $this->db->where('email', $user_name);
          $this->db->where('password', $password);
          $this->db->where('status', 1);
          $query = $this->db->get('tbl_users');
          //print_r($this->db->affected_rows());
          if($query->num_rows() == 1){            
            $rec = $query->row();
            $data = array(
              'user_id' => $rec->id,
              'login_time' => date("Y-m-d H:i:s"),
              'raw_data'  => json_encode($_SERVER)
             );
            $this->db->insert('tbl_last_activity',$data);
            return $rec->id;
          }
          //return false;   
        }

      function get_user_by_id( $id ) {     
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_users');
        return $query->row();
      }       
    function updateUser($uid,$data){
      $this->db->where('id',$uid);
      return $this->db->update('tbl_users',$data);    
  } 
          
}