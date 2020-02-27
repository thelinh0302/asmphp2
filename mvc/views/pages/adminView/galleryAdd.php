
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gallery
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
                              <label for="">ID_Product</label>
                              <select name="id_product" id="">
                                 <?php
                                    foreach($data['show_product'] as $item){?>
                                        <?php echo ' <option>'.$item['id'].' </option>' ?>
                                <?php }?> 
                              </select>
                            </div>
                             <div class="form-group">
                              <label for="">Name_Gallery</label>
                              <input type="text" name="name_gallery" id="" class="form-control" placeholder="Please Enter name Gallery" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Images_small</label>
                              <input type="file" name="Images[]" multiple id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
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
