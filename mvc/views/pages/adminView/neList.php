
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
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
                        <th>Blogger</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Images</th>
                        <th>Date</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($data['show'] as $row){  ?>
                    <tr class="odd gradeX" align="center">
                        <td> <?php echo $row['id'] ?> </td>
                        <td><?php echo $row['blogger'] ?></td>
                        <td> <?php echo $row['title'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                        <td> <?php echo $row['Images'] ?></td>
                        <td> <?php echo $row['date'] ?></td>
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
