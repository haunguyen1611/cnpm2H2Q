<?php
session_start();
include("includes/db.php");

include("functions/functions.php");
  ?>


<?php

if(isset($_GET['pro_id'])){
  $pro_id=$_GET['pro_id'];
  $get_product="select * from products where product_id='$pro_id'";
  $run_product=mysqli_query($con,$get_product);
  $row_product=mysqli_fetch_array($run_product);
  $p_cat_id=$row_product['p_cat_id'];
  $p_title=$row_product['product_title'];
  $p_price=$row_product['product_price'];
  $p_desc=$row_product['product_desc'];
  $p_img1=$row_product['product_img1'];
  $p_img2=$row_product['product_img2'];
  $p_img3=$row_product['product_img3'];
  $get_p_cat="select * from product_category where p_cat_id='$p_cat_id'";
  $run_p_cat=mysqli_query($con,$get_p_cat);
  $row_p_cat=mysqli_fetch_array($run_p_cat);
  $p_cat_id=$row_p_cat['p_cat_id'];
  $p_cat_title=$row_p_cat['p_cat_title'];

}


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
                      <span><?php item(); ?> items in cart</span>
                        </a>
                </li>
                   

                   <li>
                   <a  href="customer_registration.php"><i class="fa fa-user-plus"></i> Đăng ký</a></li>
                   <li>
                   <a href="customer/my_account.php"><i class="fa fa-user-circle"></i>Tài khoản của tôi</a></li> 
                     
                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                    
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
     
        <li><span>Mô tả</span></li>


          </ul>

           </div></div></section>  
      
    

   

    
  
  <div class="content1" id="content1">
  <div class="container1">
  <div style="
    padding: 7px; 
    background-color: white !important; /* Đổi màu nền với !important */

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif; " class="col-md-3">
      <?php
      include("includes/sidebar.php");  
      ?>
   
    </div>
    </div>
     </div>
<div class="slides">

<div class="mySlides fade">
  <div class="numbertt"></div>
  <img src="admin_area/product_images/<?php echo $p_img1 ?>" width="500" height="500">
  
</div>

<div class="mySlides fade">
  <div class="numbertt"></div>
  <img src="admin_area/product_images/<?php echo $p_img2 ?>" width="500" height="500">
  
</div>

<div class="mySlides fade">
  <div class="numbertt"></div>
  <img src="admin_area/product_images/<?php echo $p_img3 ?>" width="500" height="500">

</div>

<a class="prv" onclick="plusSlides(-1)">&#10094;</a>
<a class="net" onclick="plusSlides(1)">&#10095;</a>

</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!--<div class="col-md-9">
  <div class="row" id="productmain">
    <div class="col-sm-6">
      <div id="mainimage">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="mycarousel" data-slide-to="1"></li>
            <li data-target="mycarousel" data-slide-to="2"></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <center>
                <img src="website/all/lotion.svg" class="img-responsive">
              </center>
            </div>
            <div class="item">
              <center>
                <img src="website/all/lotion.svg" class="img-responsive">
              </center>
            </div>
            <div class="item">
              <center>
                <img src="website/all/lotion.svg" class="img-responsive">
              </center>
            </div>
          </div>
          <a href="mycarousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
           <a href="mycarousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>-->

<div class="co-md-6">
  <div class="bx">
    <h1 class="text-center"><?php echo $p_title ?></h1>
   <?php addCart(); ?>
   
    <form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal">
      <div class="form-group">
        <label class="col-md-5 control-label" >Số lượng sản phẩm </label>
        <div class="col-md-7">
          <select name="product_qty" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>
  
    <div class="form-group">
      <label class="col-md-5 control-label" >Màu sắc</label>
      <div class="col-md-7">
        <select name="product_size" class="form-control">
          <option>RED & Blue</option>
           <option>khaki</option>
            <option>white</option>
             <option>gray</option>
              <option>blue</option>
        </select>
      </div>
    </div>
    <div class="form-group">
    <b>Giá sản phẩm: <span style="color: red;" class="price"><?php echo $p_price; ?>$</span></b>
    </div>
    <p class="text-center buttons">
      <button class="btn-prim" type="submit"><i class=" fa fa-shopping-cart">Thêm vào giỏ hàng</i></button>
    </p>
  </form>
  </div>
  <div class="col-xs-4">
    <a href="#" class="thumb">
      <img src="" class="img-responsive" >
    </a>
  </div>
  <div class="col-xs-4">
    <a href="#" class="thumb">
      <img src="" class="img-responsive" >
    </a>
  </div>
  <div class="col-xs-4">
    <a href="#" class="thumb">
      <img src="" class="img-responsive" >
    </a>
  </div>
</div>
<div class="boxa" id="details">
  <h4>Mô tả</h4>
  <p><?php echo $p_desc ?></p>
  <h4>Màu sắc</h4>
  <ul>
    <li>Red</li>
     <li>Blue</li>
      <li>Green</li>
       <li>White</li>
        
  </ul>
</div>

<!--
<div id="row same-height-row">
  <div class="col-md-3 col-sm-6">
    <div class="box same-height headline">
      <h3 class="text-center">You also like these products</h3>
    </div>
  </div>
  
  <?php
$get_product="select * from products order by 1 LIMIT 0,5";
$run_product=mysqli_query($con,$get_product);
while ($row=mysqli_fetch_array($run_product)) {

  $pro_id=$row['product_id'];
  $product_title=$row['product_title'];
   $product_price=$row['product_price'];
    $product_img1=$row['product_img1'];

    echo "
    <div class='d-3'>
    <div class='product same-height'>
    <a href='details.php?pro_id=$pro_id'>
    <img src='admin_area/product_images/$product_img1' class='img-responsive' width='150' >

    </a>
    <div class='tet'>
    <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a> </h3>
    <p style='font-weight: bold; color: black;' class='price'>$product_price </p>

    </div>
    </div>
    </div>



    ";

}

    ?>
-->
</div>


     <!-- footer section starts  -->
   <?php
      include("includes/footer.php");  
      ?>
<!-- footer section   -->

</body></html>