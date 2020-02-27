<?php
    class admin extends Controller{
        public $userModel;
        public function __construct()
    {   
            $this->userModel = $this->model("userModel");
    }
        function default(){
            $this->view("login",[
                // "page"=>"login"
            ]);
        }
        function login(){
            // header("location : ./prAdmin/");
            if(!isset($_SESSION['user_custommer'])){
                if(isset($_POST['btnSubmit'])){
                    $txtUserName = $_POST['Username'];
                    $txtpassWord = $_POST['Password'];
                    $kq2 = $this->userModel->resigeter($txtUserName,$txtpassWord);
                    $rs = $kq2->rowCount();
                    foreach($kq2->fetchAll() as $login){

                    }
                    if($rs>0){
                        $phanQuyen =$login['status'];
                        if($phanQuyen == 0){
                            $_SESSION['userAdmin']=$login['username'];
                            $_SESSION['idAdmin']=$login['id'];


                                header("location:../prAdmin/");

                        }else{
                            $_SESSION['user_customer'] =$login['username'];
                            header("location:../Home/");
                        }
                    }else{
                        $error ="";
                    }
                }   
            }
           if(isset($error)){
                $this->view("login",[
                "error" => $error 
            ]);
           }else{
            $this->view("login",[]);
           }
           
        }
        //đăng xuất;
        function logout(){
            if(isset($_SESSION['userAdmin'])){
                unset ($_SESSION['userAdmin']);
                unset ($_SESSION['idAdmin']);
                $error1 = '';
            }
            if(isset($error)){
                $this->view("login",[
                "error_logout" => $error1 
            ]);
           }else{
            $this->view("login",[]);
           }
        }
        function changePassWord(){
            if($_SESSION['userAdmin']){
                if(isset($_POST['btnSubmit'])){
                    $id= $_SESSION['idAdmin'];
                    $passOld=$_POST['Password'];
                    $passNew=$_POST['PasswordNew'];
                    $result_id=$this->userModel->show_user_id($id);
                    foreach($result_id as $item){
                        $password = $item['password'];
                    }
                    if($password == $passOld){
                        $kq = $this->userModel->update_password($id,$passNew);
                    }else{
                        $kq2=" ";
                    }
                   
                }
                if(isset($kq2)){
                    $this->view("changePass",[
                        'result2'=>$kq2,
                ]);
                }elseif(isset($kq)){
                    $this->view("changePass",[
                        'result'=>$kq ,
                ]);
                }else{
                    $this->view("changePass",[]);
                }
               
            }
           
        }
        function logout_user(){
            if(isset($_SESSION['user_customer'])){
                unset ($_SESSION['user_customer']); 
                header("location:../Home/");
           }
          
        }
    }
?>