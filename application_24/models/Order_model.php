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

    function getManifestData($order_no){
      $this->db->select('order_no,itemids,shipping_provider,tracking_no');
      $this->db->where_in('order_no',$order_no);
      //$this->db->group_by('shipping_provider'); 
      $this->db->order_by('shipping_provider'); 
      $query = $this->db->get('tbl_rts_data');
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

    function countRTSData($userid=''){
        //$this->db->select('id');
        //$this->db->from('tbl_rts_data');
        if($userid!='')
          $this->db->where('user_id',$userid);
        $count = $this->db->count_all_results('tbl_rts_data');
        return $count;
    }

    function countRTSDataByDate($userid='',$start_date='',$end_date=''){
        //$this->db->select('id');
        //$this->db->from('tbl_rts_data');
        if($userid!='')
          $this->db->where('user_id',$userid);
        $this->db->where('created_at >=',$start_date);
        $this->db->where('created_at <',$end_date);
        $count = $this->db->count_all_results('tbl_rts_data');
        return $count;
    }

    function getRTSDataForMonthNNNNNN(){
              //$day=31;
        $month = '08';
        $year = '2017';
        $day=1;//cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $query="
        SELECT active.total AS total, m.day
         FROM ( SELECT '0' AS day ";
       for($i=1;$i<=$day;$i++){
           $query.="UNION SELECT '".$i."' AS day ";     
       }
              $query.=") AS m
    LEFT JOIN (SELECT COUNT(*) AS total,DAYOFMONTH(created_at) AS cday  FROM tbl_rts_data  WHERE MONTH(created_at)='".$month."' AND YEAR(created_at)='".$year."' GROUP BY DATE(created_at) ORDER BY created_at ASC ) AS active ON active.cday=m.day";
    
//print_r($query);exit;
    $result = $this->db->query($query);

          $requltInfo =array();
          while($row = $result->result_array()) {
            //print_r($row);
            $resultInfo[]=$row;
          }
      return $resultInfo;
    }
     function getRTSDataForMonth(){
          $query = "SELECT
          DATE_FORMAT(AAA.created_at,'%d') AS `day`,IF(BBB.rts_count IS NULL,0,BBB.rts_count) AS total_rts
      FROM
      (
          SELECT created_at
          FROM
          (
              SELECT MAKEDATE(YEAR(NOW()),1) +
              INTERVAL (MONTH(NOW())-1) MONTH +
              INTERVAL daynum DAY created_at
              FROM
              (
                  SELECT t*10+u daynum FROM
                  (SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3) A,
                  (SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3
                  UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7
                  UNION SELECT 8 UNION SELECT 9) B ORDER BY daynum
              ) AA
          ) AA WHERE MONTH(created_at) = MONTH(NOW())
      ) AAA  LEFT JOIN (SELECT created_at,COUNT(DATE_FORMAT(created_at,'%d')) AS rts_count FROM tbl_rts_data GROUP BY DATE_FORMAT(created_at,'%d')) BBB
      ON DATE_FORMAT(AAA.created_at,'%d') = DATE_FORMAT(BBB.created_at,'%d') 
      ORDER BY AAA.created_at";
      $result = $this->db->query($query);
      $rows = $result->result_array();

      /*print_r($row);exit;
          $requltInfo =array();
          while($row = $result->result_array()) {
            //print_r($row);
            $resultInfo[]=$row;
          }*/

      return $rows;

  }

}