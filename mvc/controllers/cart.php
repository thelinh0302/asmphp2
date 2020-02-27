<?php
    include "./mvc/PHPMailer-master/src/Exception.php";
    include "./mvc/PHPMailer-master/src/OAuth.php";
    include "./mvc/PHPMailer-master/src/PHPMailer.php";
    include "./mvc/PHPMailer-master/src/POP3.php";
    include "./mvc/PHPMailer-master/src/SMTP.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    class cart extends Controller{
        //file 404
        function Default(){
            $this->view("masterLayout",[
                
            ]);
        }
        function Checkout(){
            if(isset($_POST['btnSubmit'])){
                $nameCustomer=$_POST['Customer'];
                $phone = $_POST['phone'];
                $email1 = $_POST['email'];
                $address = $_POST['Address'];
                
                $status = "Chờ xác nhận";
               if(isset($_SESSION['cart'])){
                    $totalprice = 0;
                    $totalqt = 0;
                    foreach($_SESSION['cart'] as $item){
                        $totalprice +=(int)$item['gia'];
                        $totalqt += $item['soluong'];
                    }
                    $DBCart = $this->model('checkout');
                    $lastID = $DBCart->add_detail($nameCustomer,$totalprice,$totalqt);
                    $content ="<h2>Đơn hàng của bạn</h2>";
                    $content .= "<table border-collapse: collapse width='1000' border='1'>";
                    // $content .="<h2> nội dung nè </h2>"; 
                    $content .= " <tr > <th>Name Product</th> <th>Quality</th> <th>Price<th> </tr> ";
                    foreach($_SESSION['cart'] as $item2){
                        $masp = $item2['ma_sp'];
                        $tensp =$item2['ten_sp'];
                        $gia  = $item2['gia'];
                        $soluong = $item2['soluong'];
                        $time=date('H:i:s d-m-Y', time());
                        $DBCart->add_order($masp,$lastID,$nameCustomer,$phone,$email1,$address,$tensp,$gia,$soluong,$time,$status);
                        $content .="<tr> <td>".$item2['ten_sp']."</td><td>".$item2['soluong']."</td><td>".$item2['gia']."</td> </tr";
                        $content .="<th>Total amout:</th> <th>$totalqt</th> <th>Total price</th> <th>$totalprice</td> ";
                       }
                        
                    $content .="</table>";
                        
                        //Gửi mail

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
                            $mail->Subject = 'Bạn đã  order thành công từ cửa hàng của chúng tôi';
                            $mail->Body    =  $content;

                            $mail->send();
                    // $_SESSION['done'] = $donpay;
                    unset($_SESSION['soluong']);
                    unset($_SESSION['cart']);
    
                };
                
            }


            $DB2 = $this->model('catagory');
            $this->view("masterLayout",[
                "page"=>"cart",
                "showCatagory"=>$DB2->getAllCatagory()
            ]);
        }
        function update(){
            $id=$_POST['send'];
            $sl=$_POST['slsend'];

            $gia  = $_SESSION['cart'][$id]['gia'];
            $soluongid=$_SESSION['cart'][$id]['soluong'];

            $giachia=$gia/$soluongid;

            $_SESSION['cart'][$id]['soluong']=$sl;
            $_SESSION['cart'][$id]['gia']=$giachia*$_SESSION['cart'][$id]['soluong']=$sl;


        }
        function delete(){
            $id=$_POST['id'];
            unset($_SESSION['cart'][$id]);
        }
        
    }
?>