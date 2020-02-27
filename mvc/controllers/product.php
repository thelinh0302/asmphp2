<?php
    class Product extends Controller{
        // public $productModel;
        // public function __construct()
        // {
        //     $this->productModel = $this->model('productModel');
        // }
        function Default(){

          $DBProduct = $this->model('productModel');
          $DB2 = $this->model('catagory');
            $page = 1;
             $DB =$this->model('panigate');
             $result = $DB->panigates($page);
             $reult_All_Id = $DB->Select_All_ID();
             $total = $reult_All_Id->rowCount();//dùng hàm đếm 
             $totalchia2= $total/2;//tổng các trang chia cho 2 
            $this->view("Product",[ 
                "show"=>$result,
                "total"=>$totalchia2,
                "showCatagory"=>$DB2->getAllCatagory(),
                "showView"=>$DBProduct->show_product_view()
            ]);
           
        }
        function trang(){
            if(isset($_POST['pg'])){
                $page =$_POST['pg'];
                $DB =$this->model('panigate');
                $result = $DB->panigates($page);
                foreach($result as $item) {
                    echo 
                    '
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                      <div class="ftco-media-1-inner">
                        <a href="./product/product_detail/'.$item['id'].'" class="d-inline-block mb-4"><img src="./public/images/imagesProduct/'.$item['images'].'" alt="Image" class="img-fluid"></a>
                        <div class="ftco-media-details">
                          <h3>'.$item['nameProduct'].'</h3>
                          <p>'.$item['address1'].'</p>
                          <strong>$'.$item['price'].'</strong>
                        </div>
          
                      </div> 
                    </div>
                  </div>
                    ';
                  }
            }
        }
        function product_Catagory($id){
          $DB = $this->model('catagory');
          $this->view("product_catagory",[
            "show"=>$DB->show_product_cata_id($id),
            "showCatagory"=>$DB->getAllCatagory(),
            "id"=>$DB->show_catagory_id($id)
          ]);
        }
        function product_detail($id){
          $DB = $this->model('productModel');
          $DB2 = $this->model('catagory');
          $show_pro=$DB->show_product_id_gallery($id);
            foreach($show_pro->fetchAll() as $item){
              $view= $item['view'];
              $kq=$view+1;
              $DB->update_view_product($id,$kq);
            }
            //giỏ hàng 
           
            
            //end giỏ hàng
          $this->view("product-detail",[
            "show"=>$DB->show_product_id_gallery($id),
            "showCatagory"=>$DB2->getAllCatagory()
          ]);
        }
        function cart(){
         
            $id=$_POST['cart'];
            $DB3 = $this->model('productModel');
            $show_cart=$DB3->show_product_id_gallery($id);
            foreach($show_cart as $item ){
  
            }
            if(!isset($_SESSION['cart'])){
              $cart = array();
              $cart[$id] = array(
                  "ma_sp"=>$id,
                  "ten_sp"=>$item['nameProduct'],
                  "gia"=>$item['price'],
                  "soluong"=>1,
                  
              );
          }else{
              $cart = $_SESSION['cart'];
              if(array_key_exists($id,$cart)){
                  $cart[$id] = array(
                      "ma_sp"=>$id,
                      "ten_sp"=>$item['nameProduct'],
                      "gia"=>$item['price']* ((int)$cart[$id]['soluong']+1),
                      "soluong"=>(int)$cart[$id]['soluong']+1,
                     
                  );
              }else{
                  $cart[$id] = array(
                    "ma_sp"=>$id,
                    "ten_sp"=>$item['nameProduct'],
                    "gia"=>$item['price'],
                    "soluong"=>1,
                  );
              }
          }
          $_SESSION['cart'] = $cart;
        }
       
        // //hiển thị sản phẩm theo id kết hợp với bản gallery
        // function product_detail_gallery($id){

        // }
    }
?>