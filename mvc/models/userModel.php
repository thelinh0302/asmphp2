<?php 
    class userModel extends DB{
        public function resigeter($user,$pass){
            $select = "SELECT *FROM user where username ='$user' AND password='$pass'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
        function update_password($id,$password){
            $select ="UPDATE user SET password='$password' Where id='$id' ";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
         function show_user_id($id){
            $select_ID = "SELECT *From user Where id='$id'"; 
            $config = $this->db->prepare($select_ID);
            $config->execute();
            return $config;
        }  
    }
?>