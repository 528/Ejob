<?php

class logger {

    public static function debug($title='', $data='') {
        $logger = APPPATH . "logger.log";
        $file_handler = fopen($logger, 'a+');
        if (is_array($data)) {
            $str = "Array{";
            fwrite($file_handler, $title);
            foreach ($data as $value) {
                $str.= $value . ",";
            }
            $str = rtrim($str, ",") . "}";
            fwrite($file_handler, $str);
        } else {
            fwrite($file_handler, $title . $data);
        }
        fclose($file_handler);
    }

    public static function debugln($title='', $data='') {
        $logger = APPPATH . "logger.log";
        $file_handler = fopen($logger, 'a+');
        if (is_array($data)) {
            $str = "Array{";
            fwrite($file_handler, $title);
            foreach ($data as $value) {
                $str.= $value . ",";
            }
            $str = rtrim($str, ",") . "}";
            fwrite($file_handler, $str);
        } else {
            fwrite($file_handler, $title . $data);
        }
        fwrite($file_handler, "\n");
        fclose($file_handler);
    }

}

?>
