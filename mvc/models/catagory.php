<?php
    class Catagory extends DB{
        function getAllCatagory(){
            $query ="SELECT *From catagories";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        public function show_product_cata_id($id){
            $select = "SELECT *FROM catagories inner join product on catagories.id = product.id_catagories where catagories.id='$id'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
        public function show_catagory_id($id){
            $select = "SELECT *FROM catagories where id='$id'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
    }
?>