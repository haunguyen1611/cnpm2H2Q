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
       
     <li style="margin-left: 3rem;"><a  href="index.php">HOME</a></li>
            <li style="margin-left: 1.5rem;"><a  href="trimer.php">SHOP</a></li>
           
            <li style="margin-left: 1.5rem;"><a href="contactus.php">Liên Hệ</a></li>

 
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
                   <a  href="customer_registration.php"><i class="fa fa-user-plus"></i>Đăng ký</a></li>
                   <li>
                   <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Tài khoản của tôi</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order'>Tài khoản của tôi</a>";
                
                         }

                    ?></li> 
                     
                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng </a></li>
                    
                   <li>
                     <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'>Logout</a>";
                
                         }

                    ?></li>
             </ul>
       </div>
</ul>



</nav></div></header>

<!-- header section End  -->

<section class="content" id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
     
        <li><span>Liên Hệ</span></li>
        

      </ul>

    </div>
</div></section>  
    
  <div class="c-9">
    <div class="rx">
      <div class="box-header">
        <center>
          <h2>Liên hệ</h2>
          <p>Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi, trung tâm dịch vụ khách hàng của chúng tôi làm việc cho bạn 24/7.</p>
        </center>
      </div>
      <div>
        <form action="contactus.php" method="post">
          <div class="roup">
            <label>Họ Tên</label>
            <input type="text" name="name" required="" class="form-control">
          </div>
          <div class="roup">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Subject</label>
            <input type="text" name="submit" class="form-control" required="">
          </div>
          <div class="roup">
            <label>Thắc mắc</label>
            <textarea class="form-control" name="massage"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">
              
              <i class="fa fa-user-md"></i> Gửi thắc mắc
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
if(isset($_POST['submit'])){
$senderName=$_POST['name'];
$senderEmail=$_POST['email'];
$senderSubject=$_POST['subject'];

$receiverEmail="rakeshalakh@gmail.com";
mail($receiverEmail,$senderName,$senderSubject,$senderMassage,$senderEmail);
//customer mail
$email=$_POST['email'];
$subject="Welcome to our website";
$msg="I shall get you soon , thanks for sending email";
$from="daylahuu@gmail.com";
mail($email, $subject, $msg, $from);
echo "<h2 align='center'>Your mail sent</h2>";

}
  ?>