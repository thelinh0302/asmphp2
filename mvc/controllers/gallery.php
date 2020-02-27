<?php
    class Gallery extends Controller{
        public $galleryModel;
        public $productModel;
        public function __construct()
        {
            $this->galleryModel=$this->model("galleryModel");
            $this->productModel=$this->model("productModel");
        }
        function default(){
            $this->view("admin",[
                "page"=>"galleryList",
                "show"=> $this->galleryModel->show_gallery()
            ]);
        }
        function addGallery(){
            if(isset($_POST['btnSubmit'])){
                $nameGallery=$_POST['name_gallery'];
                $id_product = $_POST['id_product'];
                $url = "public/images/imagesProduct/";
                $anhphu = "";
                foreach($_FILES['Images']['name'] as $key=>$val ){
                    $file_path=$url.basename($_FILES['Images']['name'][$key]);
                    if(move_uploaded_file($_FILES['Images']['tmp_name'][$key],$file_path)==true)
                    {
                        $anhphu = $anhphu.",".$_FILES['Images']['name'][$key];
                    }
                }
                $anhphu = ltrim($anhphu,",");
                $kq = $this->galleryModel->add_gallery($id_product,$nameGallery,$anhphu);
            }
            if(isset($kq)){
                $this->view("admin",[
                    "page"=>"galleryAdd",
                    "result"=>$kq
                ]);
            }else{
            $this->view("admin",[
                "page"=>"galleryAdd",
                "show_product"=> $this->productModel->show_product()
            ]);
        }
    }
}
?>