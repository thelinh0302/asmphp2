<?php
    class Controller{
        //require model
        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        // require view
        public function view($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
        function sendmail($toP,$subjectP,$messageP,$formP){
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $to = $toP;
            $subject = $subjectP;
            $message = $messageP;
            $header  =  "From:" .$formP ." \r\n";
           
            $header .= "MIME-Version: 1.0\r\n";        
            $header .= "Content-type: text/html\r\n";
            $success = mail($to,$subject,$message,$header);
        }
        // function get_user_ip() {
        //     if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //         if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
        //             $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
        //             return trim($addr[0]);
        //         } else {
        //             return $_SERVER['HTTP_X_FORWARDED_FOR'];
        //         }
        //     } else {
        //         return $_SERVER['REMOTE_ADDR'];
        //     }
        // }
    }
?>