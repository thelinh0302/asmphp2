
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gallery
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <?php
                if(isset($data["result"])){
                    if($data["result"] == true){
                        echo 
                        " <div class='alert alert-success' role='alert'>
                           Xoa thong tin thanh cong
                        </div>";
                    }else {
                        echo 
                        " <div class='alert alert-danger' role='alert'>
                           Xoa thong tin that bai
                        </div>";
                    }
                }
            ?>
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>ID Product</th>
                        <th>Name Gallery</th>
                        <th>Gallery_small</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($data['show'] as $row){  ?>
                    <tr class="odd gradeX" align="center">
                        <td> <?php echo $row['id'] ?> </td>
                        <td><?php echo $row['id_product'] ?></td>
                        <td> <?php echo $row['name_gallery'] ?></td>
                        
                        <td>
                            <?php
                            $anhphu = explode(',',$row['gallery_small']);
                            foreach($anhphu as $hinh ){
                                echo '
                                    <img src="./public/images/imagesProduct/'.$hinh.'"alt="" width="20px" height="20px"> 
                                ';
                                }
                            ?>
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="./newsAdmin/deleteNews/<?php echo $row['id']?> "> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="./newsAdmin/editNews/<?php echo $row['id']?> ">Edit</a></td>
                    </tr>
                   <?php }?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->    
