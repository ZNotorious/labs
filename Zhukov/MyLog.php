<?php
    namespace Zhukov;

    use core\LogAbstract;
    use core\LogInterface;

    Class MyLog extends LogAbstract implements LogInterface {
        public function _log($str) {
            $this->log[]=$str;
        }

        public static function log($str) {
            self::Instance()->_log($str);
        }

        public function _write() {
            foreach($this->log as $el){ 
                echo $el;
            }
            //var_dump($this->log);
        }

        public static function write() {
            return self::Instance()->_write();
        }
    }
?>