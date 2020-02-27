<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <base href="/phpTrainning/">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="./public/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./public/admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./public/admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change PassWord</h3>
                    </div>
                    <div class="panel-body">
                    <?php

                            if(isset($data["result"])){
                                    echo 
                                    " <div class='alert alert-success' role='alert'>
                                       Change password Successful
                                    </div>";
                            }
                            if(isset($data["result2"])){
                                echo 
                                    " <div class='alert alert-danger' role='alert'>
                                       Please check password
                                    </div>";
                            }
                        ?>
                        <form role="form" action="./admin/changePassWord" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" value=" <?php echo($_SESSION['userAdmin']) ?>" name="Username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="mật khẩu cũ" name="Password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="mật khẩu mới" name="PasswordNew" type="password" value="">
                                </div>
                                <input type="submit" name="btnSubmit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="./public/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./public/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./public/admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./public/admin_asset/dist/js/sb-admin-2.js"></script>

</body>

</html>
