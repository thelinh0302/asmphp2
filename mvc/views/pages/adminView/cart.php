
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cart
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
                        <th>NameCustomer</th>
                        <th>Email </th>
                        <th>Name Product</th>
                        <th>Price</th>
                        <th>Quality</th>
                        <th>Date_order</th>
                        <th>Staus</th>
                        <th>Delete</th>
                        <th>Confirm</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                    foreach ($data['show'] as $row){
                        if($row['status']=='Xác nhận'){
                            $duyet = '<span class="btn btn-success" >Checked</span>';
                        }else{
                            $duyet ='<span class="btn btn-danger" >Wait Check</span>';
                        }
                        echo 
                        "
                            <tr class='odd gradeX' align='center'>
                                <td>".$row['id']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['NameProduct']."</td>
                                <td>".$row['price']."</td>
                                <td>".$row['quality']."</td>
                                <td>".$row['date_order']."</td>
                                <td>$duyet</td>
                                <td class='center'><button class= 'btn btn-primary' onclick='Delete(".$row['id'].")' > Delete </button>  </td>
                                <td>  <button class= 'btn btn-warning' onclick='check(".$row['id'].")' > Confirm </button>  </td>
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
<script>
    function check(id){
        $.post('./cartAdmin/Confirm',{send:id},function(data){
            $("#dataTables-example").load(location.href+" #dataTables-example>*","");

        })
    }
    function Delete(id){
        $.post('./cartAdmin/Delete',{send:id},function(data){
            $("#dataTables-example").load(location.href+" #dataTables-example>*","");

        })
    }
</script>
<!-- /#page-wrapper -->    
