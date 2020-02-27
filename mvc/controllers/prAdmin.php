<?php
   class prAdmin extends Controller{
       public $productModel;
       public function __construct()
       {  
             if(!$_SESSION['userAdmin']){
                header("location:./admin/login");
             }
           $this->productModel = $this->model("productModel");
       }
        function default(){
            $this->view("admin",[
                "page"=>"prList",
                "show"=>$this->productModel->show_product()

            ]);
        }
        //thêm sản phẩm
        function addProduct(){
            if(isset($_POST['btnSubmit'])){
                $id_catagories = $_POST['catagory'];
                $nameProduct = $_POST['nameProduct'];
                $address =$_POST['address'];
                $price =$_POST['price'];
                $review = $_POST['review'];
                $images = $_FILES['images']['name'];
                if(!empty($images)){
                    $tmp = $_FILES['images']['tmp_name'];
                    $new_path = 'public/images/imagesProduct/'.$images;

                    if(!move_uploaded_file($tmp, $new_path)){
                      echo  "Upload failed";
                    }else{
                        move_uploaded_file($tmp, $new_path);
                       $kq = $this->productModel->add_product($id_catagories,$nameProduct, $address,$images,$price,$review);
                       
                    }
                }else{
                    echo "Chua them hinh";
                }    
             }
             if(isset($kq)){
                $this->view("admin",[
                    "page"=>"prAdd",
                    "result"=>$kq
    
                ]);
             }else{
                 $this->view("admin",[
                "page"=>"prAdd",
                ]);
             }
        }
        //sửa
        function editProduct($id){
            if(isset($id)){
                // $ID = $_GET['id'];
                $result = $this->productModel->show_productId($id);
                if(isset($_POST['btnSubmit'])){
                    $nameProduct = $_POST['nameProduct'];
                    $address =$_POST['address'];
                    $price =$_POST['price'];
                    $review = $_POST['review'];
                    $images = $_FILES['images']['name'];
                    if(!empty($images)){
                        $tmp = $_FILES['images']['tmp_name'];
                        $new_path = 'public/images/imagesProduct/'.$images;
    
                        if(!move_uploaded_file($tmp, $new_path)){
                          echo  "Upload failed";
                        }else{
                            move_uploaded_file($tmp, $new_path);
                           $kq = $this->productModel->update_product($id,$nameProduct, $address,$images,$price,$review);
                        }
                    }else{
                        echo "Chua them hinh";
                    }
                }
            }
            if(isset($kq)){
                $this->view("admin",[
                    "page"=>"prEdit",
                    "result"=>$result,
                    "result_kq"=>$kq
                ]);
            }else{
                $this->view("admin",[
                    "page"=>"prEdit",
                    "result"=>$result
                ]);
            }
        }
        //xóa
        function deleteProduct($id){
            if(isset($id)){
                $result = $this->productModel->delete_product($id); 
            }
            if(isset($result)){
                $this->view("admin",[
                    "page"=>"prList",
                    "result"=>$result,
                    "show"=>$this->productModel->show_product()

                ]);
            }else{
                $this->view("admin",[
                    "page"=>"prList",
                    "show"=>$this->productModel->show_product()  
                ]);
            }
        }
    }
?>