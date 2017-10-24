<?php 
class Log_model{
    function __construct(){
      if (!file_exists(LOG_DIR.date('Y'))) {
        mkdir(LOG_DIR.date('Y'), 0775, true);
      }
      if (!file_exists(LOG_DIR.date('Y').'/'.date('m'))) {     
        mkdir(LOG_DIR.date('Y').'/'.date('m'), 0775, true);
      }
    }

    function writeErrorLog($data){
        return file_put_contents(ERROR_LOG_DIR.'error_'.date('Y-m-d'),$data.PHP_EOL,FILE_APPEND);
    }

    function writeEventLog($data,$action='Default'){
      $dateOn = date('Y-m-d H:i:s');
      $log_file = LOG_DIR.date('Y').'/'.date('m').'/'.date('d').'_log';
      $content  = $dateOn."|".$action."|".$data.PHP_EOL;
      return file_put_contents($log_file,$content,FILE_APPEND);
    }

          
}