<?php
   class newsAdmin extends Controller{
    public $newsModel;
    public function __construct()
    {
        
        if(!$_SESSION['userAdmin']){
            header("location:./admin/login");
         }
         $this->newsModel = $this->model("newsModel");
    }
        function default(){
            
            $this->view("admin",[
                "page"=>"newsAdd"
            ]);
        }
        function listNew(){
            $this->view("admin",[
                "page"=>"neList",
                "show"=>$this->newsModel->show_news()
            ]);
        }
        function addNews(){
            if(isset($_POST['btnSubmit'])){
                $blogger = $_POST['blogger'];
                $Tittle =$_POST['Tittle'];
                $date =$_POST['date'];
                $content = $_POST['content'];
                $images = $_FILES['Images']['name'];
                if(!empty($images)){
                    $tmp = $_FILES['Images']['tmp_name'];
                    $new_path = 'public/images/imagesProduct/'.$images;

                    if(!move_uploaded_file($tmp, $new_path)){
                      echo  "Upload failed";
                    }else{
                        move_uploaded_file($tmp, $new_path);
                       $kq = $this->newsModel->add_news($blogger, $Tittle,$content,$images,$date);
                       
                    }
                }else{
                    echo "Chua them hinh";
                }    
             }
             if(isset($kq)){
                $this->view("admin",[
                    "page"=>"neAdd",
                    "result"=>$kq
    
                ]);
             }else{
                 $this->view("admin",[
                "page"=>"neAdd",
                ]);
             }
        }
        function editNews($id){
            if(isset($id)){
                $result = $this->newsModel->show_newsId($id);
                if(isset($_POST['btnSubmit'])){
                    $blogger = $_POST['blogger'];
                    $Tittle =$_POST['Tittle'];
                    $date =$_POST['date'];
                    $content = $_POST['content'];
                    $Images = $_FILES['Images']['name'];
                    if(!empty($Images)){
                        $tmp = $_FILES['Images']['tmp_name'];
                        $new_path = 'public/images/imagesProduct/'.$Images;
    
                        if(!move_uploaded_file($tmp, $new_path)){
                          echo  "Upload failed";
                        }else{
                            move_uploaded_file($tmp, $new_path);
                           $kq = $this->newsModel->update_news($id,$blogger, $Tittle,$content,$Images,$date);
                        }
                    }else{
                        echo "Chua them hinh";
                    }
                }
            }
            if(isset($kq)){
                $this->view("admin",[
                    "page"=>"neEdit",
                    "show"=>$result ,                   
                    "result_kq"=>$kq
                    ]);

            }else{
                $this->view("admin",[
                    "page"=>"neEdit",
                    "show"=>$result , 
                ]);
            }
            
        }
        function deleteNews($id){
            if(isset($id)){
                $result = $this->newsModel->delete_news($id);
            }
            if(isset($result)){
                $this->view("admin",[
                    "page"=>"neList",
                    "result"=>$result,
                    "show"=>$this->newsModel->show_news()

                ]);
            }else{
                $this->view("admin",[
                    "page"=>"neList",
                    "show"=>$this->newsModel->show_news()
                ]);
            }
        }
    }
?>