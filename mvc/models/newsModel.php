<?php
    class newsModel extends DB{
        // add product
        public function add_news($blogger,$title,$content,$Images,$date){
            $query = "INSERT INTO  news (blogger,title,content,Images,date) VALUES ('$blogger','$title','$content','$Images','$date') ";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        // hiển thị sản phẩm
        public function show_news(){
            $query ="SELECT *From news";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
        //lấy sản phẩm theo id
        public function show_newsId($id){
            $select_ID = "SELECT *From news Where id='$id'"; 
            $config = $this->db->prepare($select_ID);
            $config->execute();
            return $config;
        }  
            public function update_news($id,$blogger,$title,$content,$Images,$date){ 
           
            $update_news = "UPDATE news SET blogger='$blogger',title='$title',content='$content',Images='$Images',date='$date' Where id='$id'";
            $config = $this->db->prepare($update_news);
            $config->execute();
            return $config;
        }
        function delete_news($id){
            $query = "DELETE FROM news WHERE id='$id'";
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }
    }

?>