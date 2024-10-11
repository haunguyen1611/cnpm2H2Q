<?php
session_start();
include("includes/db.php");

include("functions/functions.php");
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuCa Acoustic</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
  <style>


  </style>
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">
<a href="index.php" class="logo" > <img src="admin_area/product_images/ok1.png" alt="Logo image" class="hidden-xs">  </a>
<div class="col-md-6 offer">
    <a href="#" class="btn btn-sucess btn-sm">
        <?php

        if (!isset($_SESSION['customer_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome: " .$_SESSION['customer_email'] . "";
    }


        ?>
    </a>
    <a id="pr" href="#"> Tổng giá trong giỏ hàng: <?php totalPrice(); ?>$, Số lượng sản phẩm <?php item(); ?></a>
</div>
  
</div>

<div class="header-2">
   

<nav class="navbar"> 


     <ul >
      
            <li><a  href="index.php">HOME</a></li>
            <li><a  href="trimer.php">SHOP</a></li>
        <li><a href="contactus.php">Liên Hệ</a></li>
       <div class="col-md-6">
        <ul class="menu">
            <li>
            <div class="collapse clearfix" id="search">
                             <form class="navbar-form" method="get" action="result.php">
                                 <div style="margin-bottom: .8rem; padding-left: 9px;" class="input-group">
                                     <input style="margin-right: 7px ; padding-left: 10px;" type="text" name="user_query" placeholder="Tìm kiếm...." class="form-control" required="">
                                     <button style="margin-right: 5px ; padding-left: 10px;" type="submit" value="search" name="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                     </button>
                                 </div>
                             </form>
                         </div>
                   </li>



                <li>
                  <a href="cart.php" class="">
                    <i class="fa fa-shopping-cart"></i>
                      <span><?php item(); ?> Sản phẩm trong giỏ</span>
                        </a>
                </li>
                   

                   <li>
                   <a class="active" href="#customer_registration.php"><i class="fa fa-user-plus"></i>Đăng ký</a></li>
                   <li>
                   <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Tài khoản của tôi</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order'>Tài khoản của tôi</a>";
                
                         }

                    ?></li> 
                     
                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                    
                   <li>
                    <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'>Logout</a>";
                
                         }

                    ?>


                   </li>
             </ul>
       </div>
</ul>



</nav></div></header>

<!-- header section End  -->

<section class="content" id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
     
        <li><span>Đăng ký</span></li>
        

      </ul>

    </div>
</div></section>  
    
  <div class="c-9">
    <div class="rx">
      <div class="box-header">
        <center>
          <h2>Đăng ký tài khoản mới</h2>
          
        </center>
      </div>
      <div>
        <form action="customer_registration.php" method="post" enctype="multipart/form-data">
          <div class="roup">
            <label>Họ tên</label>
            <input type="text" name="c_name" required="" class="form-control">
          </div>
          <div class="roup">
            <label> Email</label>
            <input type="text" name="c_email" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label> Password</label>
            <input type="password" name="c_password" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Quốc gia</label>
            <input type="text" name="c_country" class="form-control" required="">
            
          </div>
         
        <div class="roup">
            <label>Thành phố</label>
            <input type="text" name="c_city" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label> Số điện thoại</label>
            <input type="text" name="c_contact" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Địa chỉ cụ thể</label>
            <input type="text" name="c_address" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Ảnh</label>
            <input type="file" name="c_image" class="form-control" required="">
            
          </div>
          <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">
              
              <i class="fa fa-user-md"></i> Đăng ký
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

     <!-- footer section starts  -->
   <?php
      include("includes/footer.php");  
      ?>
<!-- footer section   -->

</body></html>

<?php 

if (isset($_POST['submit'])) {
  $c_name=$_POST['c_name'];
  $c_email=$_POST['c_email'];
  $c_password=$_POST['c_password'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];
  $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIp();

    move_uploaded_file($c_tmp_image, "customer/customer_images/$c_image");
    $insert_customer="insert into customers (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_customer=mysqli_query($con,$insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);
    if($check_cart>0){
    $_SESSION['customer_email']=$c_email;
    echo "<script>alert('you have been registered successfully')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  }else {
    $_SESSION['customer_email']=$c_email;
    echo "<script>alert('you have been registered successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 
}
}


?>