<?php 
    include "./mvc/PHPMailer-master/src/Exception.php";
    include "./mvc/PHPMailer-master/src/OAuth.php";
    include "./mvc/PHPMailer-master/src/PHPMailer.php";
    include "./mvc/PHPMailer-master/src/POP3.php";
    include "./mvc/PHPMailer-master/src/SMTP.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    class cartAdmin extends Controller{
        public function __construct()
        {
            $this->cartModel=$this->model('cartModel');
        }
        function default(){
            $this->view("admin",[
                "page"=>"cart",
                "show"=>$this->cartModel->show_cart()

            ]);
        }
        function Confirm(){
                $id=$_POST['send'];
                $result = $this->cartModel->show_cart_id($id);
                $content ="<html><body>";
                $content .="<h1> Đơn hàng của bạn đã đc chúng tôi tiếp nhận và đang được xử lí </h1>"; 
                $content .="</body></html>";
                $update = $this->cartModel->update_status($id);
                foreach($result as $item){
                    $email1=$item['email'];
                    $nameCustomer = $item['name'];
                }
                $mail = new PHPMailer(true);
                       
                $mail->isSMTP(); 
                $mail->CharSet ='UTF-8';
                $mail->Host= 'smtp.gmail.com';
                $mail->SMTPAuth   = true; 
                $mail->Username   = 'chaulinh201@gmail.com';
                $mail->Password   = 'chauthelinh';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('from@example.com', 'Architure');
                $mail->addAddress($email1, $nameCustomer);

                $mail->isHTML(true);
                $mail->Subject = 'Thanhk you very much';
                $mail->Body    =  $content;

                $mail->send();

        }
        function Delete(){
            $id=$_POST['send'];
            $delete = $this->cartModel->delete($id);
        }

    }
?>