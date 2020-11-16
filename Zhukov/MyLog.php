<?php
    namespace Zhukov;

    use core\LogAbstract;
    use core\LogInterface;


    Class MyLog extends LogAbstract implements LogInterface {

        public function _log($str){
            $this->log[]=$str;
        }

        public static function log($str){
            self::Instance()->_log($str);
    	}
        
        public function _write(){  
            for($i=0; $i<sizeof($this->log);$i++){
                echo $this->log[$i]."\n";
            }      
        }
        
        public static function write(){
            MyLog::Instance()->_write();
        }
    }
?>