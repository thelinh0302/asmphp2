<?php
    class productModel extends DB{
        // add product
        public function add_product($id_catagory,$namProduct,$Address,$image,$price,$review){
            $query = "INSERT INTO  product(id_catagories,NameProduct,address1,images,price,review) VALUES('$id_catagory','$namProduct','$Address','$image','$price','$review') ";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        //     $db = new DB();
        //    return $db->execute1($query);
        }
        // hiển thị sản phẩm
        public function show_product(){
            $query ="SELECT *From product";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        public function show_product_limit(){
            $query = "SELECT *From product LIMIT 6";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        //lấy sản phẩm theo id
        public function show_productId($id){
            $select_ID = "SELECT *From product Where id='$id'"; 
            $config = $this->db->prepare($select_ID);
            $config->execute();
            return $config;
        }  
        //Hiển thị sản phẩm theo id và kết hợp với bản 
        public function show_product_id_gallery($id){
            $select = "SELECT *FROM product inner join gallery on product.id = gallery.id_product where product.id='$id'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
        public function show_product_catagory_id($id){
            $select = "SELECT *FROM product  inner join catagories on product.id_catagories = catagories.id where catagories.id='$id'";
            $config = $this->db->prepare($select);
            $config->execute();
            return $config;
        }
        //update sản phẩm
            public function update_product($id,$nameProduct,$Address,$image,$price,$review){ 
            $update_product = "UPDATE product SET nameProduct='$nameProduct',address1='$Address',images='$image',price='$price',review='$review' Where id='$id'";
            $config = $this->db->prepare($update_product);
            $config->execute();
            return $config;
        }
        function delete_product($id){
            $query = "DELETE FROM product WHERE id='$id'";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        function show_product_view(){
            $query ="SELECT *From product order by view DESC limit 6";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        function update_view_product($id,$view){
            $update_view ="UPDATE product set view = '$view' where id='$id'";
            $config = $this->db->prepare($update_view);
            $config->execute();
            return $config;
        }
        // public function panigate(){
        //     $proPage = 3;
        //     $page = 1;
        //     $from = ($page - 1) * $proPage;
        //     $query ="SELECT * FROM product ORDER BY id ASC LIMIT $from, $proPage";
        //     $config = $this->db->prepare($query);
        //     $config->execute();
        //     return $config;
        // }
    }

?>