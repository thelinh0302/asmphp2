
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                    <form action="" method="POST"  enctype="multipart/form-data">
                        <?php foreach($data['show'] as $row){?>
                            <div class="form-group">
                              <label for="">Blogger</label>
                              <input type="text" name="blogger" id="" value="<?php echo $row['blogger'] ?>" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="">Tittle</label>
                              <input type="text" name="Tittle" id="" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                           
                            <div class="form-group">
                              <label for="">Date</label>
                              <input type="date" name="date" id="" value="<?php echo $row['date'] ?>" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" id="exampleTextarea" rows="3"><?php echo $row['content'] ?></textarea>
                            </div> 
                            <div class="form-group">
                              <label for="">Images</label>
                              <input type="file" name="Images" id="" class="form-control" placeholder="Please Enter name Product" aria-describedby="helpId">
                              <?php echo " <img style ='width :50%' src='./public/images/imagesProduct/".$row['Images']."' alt=''> " ?> 

                            </div>
                        <input type="submit" name="btnSubmit" class="btn btn-default" value="Add">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <?php } ?>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
