<?php 
class Order_model extends CI_Model {
    
    function storeOrderItems($data){
            $insert = $this->db->insert('tbl_order_items', $data);
            return $this->db->insert_id();
    }

    function getOrderItemsByUser($uid,$status=1){
        $this->db->where('user_id', $uid);
        $this->db->where('status', $status);
        $query = $this->db->get('tbl_order_items');
        return $query->result_array();
    }
    function deleteOrderItems($uid){
      // I need ot add it in cron
      //DELETE t1 FROM tbl_order_items_log t1,tbl_order_items_log t2 WHERE t1.item_id=t2.item_id AND t2.id>t1.id
      $this->db->where('user_id', $uid);  
      $query = $this->db->get('tbl_order_items');
      foreach ($query->result() as $row) {
            $this->db->insert('tbl_order_items_log',$row);
      }
      $this->db->where('user_id', $uid);
      $this->db->delete('tbl_order_items');
    }

    function deleteDuplicateOrderItmeLog(){
      $sql = "DELETE t1 FROM tbl_order_items_log t1,tbl_order_items_log t2 WHERE t1.item_id=t2.item_id AND t2.id>t1.id";
      $this->db->query($sql);
      
    }

    function getRTSData($tn){
        $this->db->select('order_no,order_id,item_id,delivery_type,shipping_provider');
        $this->db->where('tracking_no', $tn);
        $query = $this->db->get('tbl_order_items');
        return $query->result_array();
    }

    function getManfestList($uid){
        $this->db->select('order_no,itemids,tracking_no');
        $this->db->where('user_id', $uid);
        $this->db->order_by('id','desc');
        $query = $this->db->get('tbl_rts_data');
        return $query->result_array();
    }

     function storeRTSData($data){
            $insert = $this->db->insert('tbl_rts_data', $data);
            return $this->db->insert_id();
    } 

    function isRTSTNExist($str){
        $this->db->select('id');
        $this->db->from('tbl_rts_data');
        $this->db->where('tracking_no',$str);
        $count = $this->db->count_all_results();
        if($count>0){
          return true;
        }else{return false;}
    }       
}