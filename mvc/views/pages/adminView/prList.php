
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
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
                        <th>ID_Catagory</th>
                        <th>Name Product</th>
                        <th>Price</th>
                        <th>Address </th>
                        <th>Review</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                    foreach ($data['show'] as $row){
                        echo 
                        "
                            <tr class='odd gradeX' align='center'>
                                <td>".$row['id']."</td>
                                <td>".$row['id_catagories']."</td>
                                <td>".$row['nameProduct']."</td>
                                <td>".$row['price']."</td>
                                <td>".$row['address1']."</td>
                                <td>".$row['review']."</td>
                                <td>".$row['images']."</td>
                                <td class='center'><i class='fa fa-trash-o  fa-fw'></i><a href='./prAdmin/deleteProduct/".$row['id']."'> Delete</a></td>
                                <td class='center'><i class='fa fa-pencil fa-fw'></i> <a href='./prAdmin/editProduct/".$row['id']."'>Edit</a></td>
                           </tr>
                        ";
                    }
                ?>
                     
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->    
