<?php 
    class checkout extends DB{
        function add_detail($nameCustomer,$total_price,$total_quality){
            $query = "INSERT INTO detail(nameCustomer,total_price,TotalQuality) Values ('$nameCustomer','$total_price','$total_quality') ";
            $config = $this->db->prepare($query);
            $config->execute();
            $config = $this->db->lastInsertId();
            return $config;
        }
        function add_order($idProduct,$id_Detail,$name,$phone,$email,$address,$nameProduct,$price,$quality,$date_order,$status){
            $query = "INSERT INTO order_product(idProduct,id_Detail,name,phone,email,Adddress,NameProduct,price,quality,date_order,status) VALUES ('$idProduct','$id_Detail','$name','$phone','$email','$address','$nameProduct','$price','$quality','$date_order','$status') "; 
            $config = $this->db->prepare($query);
            $config->execute();
            return $config;
        }

    }

?>