<?php
    class galleryModel extends DB{
        // add product
        public function add_gallery($id_product,$name_gallery,$gallery_small){
            $query = "INSERT INTO  gallery (id_product,name_gallery,gallery_small) VALUES ('$id_product','$name_gallery','$gallery_small') ";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        // hiển thị sản phẩm
        public function show_gallery(){
            $query ="SELECT *From gallery";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        
        //lấy sản phẩm theo id
        // public function show_newsId($id){
        //     $select_ID = "SELECT *From news Where id_gallery='$id'"; 
        //     $config = $this->db->prepare($select_ID);
        //     $config->execute();
        //     return $config;
        // }  
        //     public function update_news($id,$blogger,$title,$content,$Images,$date){ 
           
        //     $update_news = "UPDATE news SET blogger='$blogger',title='$title',content='$content',Images='$Images',date='$date' Where id_gallery='$id'";
        //     $config = $this->db->prepare($update_news);
        //     $config->execute();
        //     return $config;
        // }
        // function delete_news($id){
        //     $query = "DELETE FROM news WHERE id='$id'";
        //     $config = $this->db->prepare($query);
        //     $config->execute();
        //     return $config;
        // }
    }

?>