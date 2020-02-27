
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                <?php 
                        if(isset($data["result"])){
                            if($data["result"] == true){
                                echo 
                                " <div class='alert alert-success' role='alert'>
                                    Nhap thong tin thanh cong
                                </div>";
                            }else {
                                echo 
                                " <div class='alert alert-danger' role='alert'>
                                    Nhap thong tin that bai
                                </div>";
                            }
                        }
                    ?>
                    <form action="" method="POST"  enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Blogger</label>
                              <input type="text" name="blogger" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Tittle</label>
                              <input type="text" name="Tittle" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Images</label>
                              <input type="file" name="Images" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Date</label>
                              <input type="date" name="date" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        <input type="submit" name="btnSubmit" class="btn btn-default" value="Add">
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
