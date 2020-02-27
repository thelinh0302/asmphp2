<?php
    class panigate extends DB{
        public function panigates($page){
            $proPage = 3;
            $from = ($page - 1) * $proPage;
            $query ="SELECT * FROM product ORDER BY id ASC LIMIT $from, $proPage";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        function Select_All_ID(){
            $db = "SELECT * FROM product ";
            $result = $this->db->prepare($db);
            $result->execute();
            return $result;
        }
    }
?>