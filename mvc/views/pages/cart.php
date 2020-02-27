
<section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Check Out</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            
            <form action=" " method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Name Customer</label>
                  <input type="text" onblur="checkName()"  name="Customer" id="firstName1"   class="form-control" required/>
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="phone">Phone</label> 
                  <input type="number" onblur="checkNumber()" name="phone" id="number" class="form-control" required/>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" onblur="checkMail()"  name="email" id="email" class="form-control" required/>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Address</label> 
                  <textarea name="Address" id="message" cols="30" rows="7" class="form-control" required placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="btnSubmit" value="Check Out" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5"> 
           <table  class="table">
             <thead>
               <tr>
                 <th> Product</th>
                 <th>Total</th>
                 <th>Price</th>
                 <th>Update</th>
                 <th>Delete</th>
               </tr>
             </thead>
             <tbody >
               
                 <?php
                 if(isset($_SESSION['cart'])){
                  $totalprice = 0;
                  $totalqt = 0;
                  foreach($_SESSION['cart'] as $item){
                    $totalprice +=(int)$item['gia'];
                    $totalqt += $item['soluong'];
                    echo '
                    <tr class="reload-2"  >
                      <td >'.$item['ten_sp'].'</td>
                      <td ><input style="width:30px;text-align:center" type="number" value="'.$item['soluong'].'" name="" id="sl"> </td>
                      <td >'.$item['gia'].'</td>  
                      <td class="updatecart updatecart'.$item['ma_sp'].'"> <button onClick="updateCart('.$item['ma_sp'].')" data-key='.$item['ma_sp'].' class="btn btn-sm btn-danger">Update</button></td> 
                      <td> <button onClick="deletecart('.$item['ma_sp'].')" data-key='.$item['ma_sp'].' class="btn btn-sm btn-danger">Delete</button></td> 
                      <td> <input type="hidden" value="'.$item['ma_sp'].'" id="key"/> </td>   

                      </tr>
                      ';   
                  }
                  echo "
                      <br>
                      
                      <th>Total amout:</th>
                      <th>$totalqt</th>
                      <th>Total:</th>
                      <th class='reload'>$totalprice</th>
                      
                  "; 
                 }

                 ?>
             </tbody>
           </table>
          </div>
        </div>
      </div>
    </section>
    <script>
    function updateCart(num){
      updatecart=$(".updatecart");
      id=$(".updatecart"+num).parents("tr").find("#key").val();
      sl=$(".updatecart"+num).parents("tr").find("#sl").val();
      $.post('./cart/update',{send:id,slsend:sl},function(data){
        $(".table").load(window.location.href+" .table>*","");
        $(".reload-2").load(window.location.href +'.reload-2');
        $(".reload").load(window.location.href +'.reload');
      })
    }
    function deletecart(id){
      $.post('./cart/delete',{id:id},function(data){
        $(".table").load(window.location.href+" .table>*","");
        // $(".reload-2").load(window.location.href +'.reload-2');
        // $(".reload").load(window.location.href +'.reload');
       
      })
      console.log(id);
    }

      function checkName(){
        var name = /(?:[A-Z][a-z]*.{0,2}[a-z] *\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
        var textName = document.getElementById("firstName1").value
        if(name.test(textName)){
            jQuery("#firstName1").css({"border":"1px solid #3333"});
        }else{
            jQuery("#firstName1").css({"border":"1px solid red"});
        }
    }
    function checkMail(){
        var email = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
        var textName = document.getElementById("email").value
        if(email.test(textName)){
            jQuery("#email").css({"border":"1px solid #3333"});
        }else{
            jQuery("#email").css({"border":"1px solid red"});
        }
    }
    function checkNumber(){
        var phone =/^\d{10}$/;
        var textName = document.getElementById("number").value
        if(phone.test(textName)){
            jQuery("#number").css({"border":"1px solid #3333"});
        }else{
            jQuery("#number").css({"border":"1px solid red"});
        }
    }
    // function checkName(){
    // var name =/^[a-zA-Z]*$/;
    // var patter5 =/[<>]/g;
    // var txt8 = document.getElementById("firstName1").value;
    // if(name.test(txt8) && !patter5.test(txt8)){
    //     jQuery("#firstName1").css({"border":"1px solid #3333"});
    // }else { 
    //     jQuery("#firstName1").css({"border":"1px solid red"});
    // }
// };
    </script>