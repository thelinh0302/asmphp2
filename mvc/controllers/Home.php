<?php
    class Home extends Controller{
        //file 404
        function Default(){
            $this->view("masterLayout",[
        
            ]);
        }
        function home(){
            $DB =$this->model('productModel');
            $DBCata=$this->model('catagory');
            $this->view("masterLayout",[
                "page"=>"home",
                "show"=> $DB->show_product_limit(),
                "showCatagory"=>$DBCata->getAllCatagory()
            ]);
        }
        //Cách truyền dữ liệu sang view và lấy dữ liệu từ model
        // function all(){
        //     //require model
        //     $db = $this->model("BooksModel");
        //     $this->view("masterlayout", [
        //         //gọi tới file masterlayout rồi trả về chữ trangchu để require trang chủ từ pages
        //         "page"=> "trangchu",
        //         //truyền model qua view
        //         "books"=> $db->books_ty(),
        //     ]);
        // }
        // //File test gõ theo đường dẫn  thư mục chứa file/home/test
        // function test(){
        //     $this->view("masterlayout", [
        //         "page"=> "test",
        //     ]);
        // }
    }
?>