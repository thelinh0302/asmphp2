
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
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
                
                    <form action="./prAdmin/addProduct" method="POST"  enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Catagory</label>
                              <select name="catagory" id="">
                                <option >1</option>
                                <option >2</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Name Product</label>
                              <input type="text" name="nameProduct" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" id="" class="form-control" placeholder="Please Enter Address" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="images" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" name="price" id="" class="form-control" placeholder="Plesase Enter Price" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Review</label>
                                <textarea class="form-control" name="review" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btn btn-default" value="Add">
                                <button type="reset" class="btn btn-default">Reset</button>
                             </div>
                    <form> 
                    </div>
                  
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
