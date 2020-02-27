
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <?php
                if(isset($data["result_kq"])){
                    if($data["result_kq"] == true){
                        echo 
                        " <div class='alert alert-success' role='alert'>
                           Edit thong tin thanh cong
                        </div>";
                    }else {
                        echo 
                        " <div class='alert alert-danger' role='alert'>
                           Edit thong tin that bai
                        </div>";
                    }
                }
            ?>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST"  enctype="multipart/form-data">
                    <?php foreach($data['result'] as $row) {?>
                        <div class="form-group">
                        <label for="">Name Product</label>
                        <input type="text" name="nameProduct" id="" value="<?php echo $row['nameProduct']   ?>" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" value=" <?php echo $row['address1'] ?> " class="form-control" placeholder="Please Enter Address" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" name="price" id="" value=" <?php echo $row['price'] ?>" class="form-control" placeholder="Plesase Enter Price" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Review</label>
                            <textarea class="form-control" name="review" value=" " id="exampleTextarea" rows="3"><?php echo $row['review']?> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="images" id="" value=" <?php echo $row['images'] ?> " class="form-control" placeholder="" aria-describedby="helpId">
                            <?php echo " <img style ='width :50%' src='./public/images/imagesProduct/".$row['images']."' alt=''> " ?> 
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-default" value="Edit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                    <form> 
                    <?php } ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
