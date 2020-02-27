<?php 
    class cartModel extends DB{
        function show_cart(){
            $query = " SELECT *FROM order_product ";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        public function show_cart_id($id){
            $select_ID = "SELECT *From order_product Where id='$id'"; 
            $config = $this->db->prepare($select_ID);
            $config->execute();
            return $config;
        }  
            function update_status($id){
            $select ="UPDATE order_product SET status ='Xác nhận' WHERE id='$id'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
        function delete($id){
            $query = "DELETE FROM order_product WHERE id='$id'";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config; 
        }

    }
?>