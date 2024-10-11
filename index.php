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
   

<nav  class="navbar"> 


     <ul >
         <ul   style=" background-color: #333333 !important; "  >
        <li style=" background-color: #333333 !important; " >
            
            <li ><a  style=" background-color: #333333 !important; " class="active" href="index.php">HOME</a></li>
             
            <li><a href="trimer.php">SHOP</a></li>
            <li><a href="#arrival">SẢN PHẨM</a></li>
            <li><a href="#parlor">AMPLIFIER & AFFECT</a></li>
            <li><a href="#garment">PHỤ KIỆN</a></li>
            <li><a href="#use">DAILY-USE</a></li>
            <li><a href="#deal">DEAL</a></li>
            <li><a href="contactus.php">CONTACT</a></li>
            <li><a href="#footer">ABOUT</a></li>
</ul >
       <div class="col-md-6 ">
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
                   <a  href="customer_registration.php"><i class="fa fa-user-plus"></i> Đăng ký</a></li>
                   <li>
                    <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Tài khoản của tôi</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order'>Tài khoản của tôi</a>";
                
                         }

                    ?>
                   </li> 

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
    
    
           
    
       
    
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

<h1 class="heading"> <span>ƯU ĐÃI TỐT NHẤT CHO BẠN!</span> </h1>

<div class="slideshow-container">
<!-- dynamic hairstyle images section starts  -->

<?php
$get_slider="select * from slider LIMIT 0,1";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];

  echo "<div class='mySlides fade'>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image'  width='1400' height='400'></a>

</div>
  ";
}

    ?>
<?php
$get_slider="select * from slider LIMIT 1,10";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];
  echo "<div class='mySlides fade '>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image' width='1400' height='400'></a>
        </div>";
}

    ?>


<!-- dynamic hairstyle images section End  -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div  style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  

</div>



</section>




<!-- home section ends -->
<!-- new this week section start -->
<!-- hot start -->

<div class="hot">    
    <div class="box">
        <div class="container">
            <div class="col-md-121">
                <h2>Mới nhất trong tuần này</h2>
           
          <!-- dynamic latest this week images section start  -->
          <div class=" col-sm-4" >
          <div class="row">
                   <?php

                   getPro();


                     ?>
 </div>
</div><!-- hot End -->
 </div>
         </div>
    </div>
</div>
          <!-- dynamic latest this week images section End  -->


                   
      


<!-- new this week section End -->


<!--saloon product section starts  -->

<!-- Trimer Start  -->
<section class="arrival" id="arrival">

<h1 class="heading"> <span>DANH MỤC SẢN PHẨM</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?cat_id=7"> <img style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/guitar.jpg" alt="" width="150"></a>
        </div>
        <div class="info">
            <a href="trimer.php?cat_id=7"><h3>GUITAR</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?cat_id=8">  <img style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/elec.webp" alt=""></a>
        </div>
        <div class="info">
          <a href="trimer.php?cat_id=8">  <h3>GUITAR ĐIỆN</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=24"> <img style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/piano.webp" alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=24"> <h3>PIANO</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?cat_id=10"><img style="width: 200px;height: 200px; margin-top: 4rem;"  src="admin_area/product_images/bass.webp" alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?cat_id=10"><h3>GUITAR BASS</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=26"> <img style="width: 200px;height: 200px; margin-top: 4rem; padding: 20px;" src="admin_area/product_images/saxo2.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=26"><h3>SAXOPHONE</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=27"> <img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/violin.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=27"><h3>VIOLIN</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=28"> <img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/sao2.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=28"><h3>SÁO</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?cat_id=13"> <img style="width: 200px;height: 200px; margin-top: 4rem;"  src="admin_area/product_images/elecdrum.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?cat_id=13"><h3>TRỐNG ĐIỆN TỬ</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=27"> <img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/trong.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=27"><h3>TRỐNG</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=31"> <img style="width: 200px;height: 200px; margin-top: 4rem;"  src="admin_area/product_images/cajon.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=31"><h3>CAJON</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
 
     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=32"> <img  style="width: 200px;height: 200px; margin-top: 4rem;"src="admin_area/product_images/day.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=32"><h3>DÂY shaver</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

   

    


 

    </div>
</section>

<!-- saloon products section ends -->
<!-- parlor products section starts -->

<section class="parlor" id="parlor">

<h1 class="heading"> <span>AMPLIFIER & AFFECT</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=38"><img  style="width: 200px;height: 200px; margin-top: 4rem;"src="admin_area/product_images/storedata.avif"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=38"><h3>SOUNDCARD</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=39">  <img  style="width: 200px;height: 200px; margin-top: 4rem;"src="admin_area/product_images/ampli.jpg"  alt=""></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=39">  <h3>AMPLIFIER </h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=40">  <img  style="width: 200px;height: 200px; margin-top: 4rem;"src="admin_area/product_images/loa.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=40"> <h3>Face Cream </h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=41"> <img  style="width: 200px;height: 200px; margin-top: 4rem;"src="admin_area/product_images/mic.jpg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=41"><h3>MIC</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

   



    </div>
</section>
<!-- parlor products section ends -->
<!-- garment products section start -->
<section class="garment" id="garment">

<h1 class="heading"> <span>PHỤ KIỆN</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=45"> <img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/Capo-guitar-B701-01-den-850x850-tongkhonhaccu_com.jpg"  alt="" width="340"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=45"><h3>CAPO</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=46"><img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/gia-treo-dan-guitar-cao-cap.webp"  alt="" width="340"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=46">  <h3>GIÁ TREO ĐÀN   </h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=47"> <img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/DADD50JSSV17-450x471.jpg"  alt="" width="340"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=47"> <h3>DÂY ĐEO ĐÀN</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=48"><img  style="width: 200px;height: 200px; margin-top: 4rem;" src="admin_area/product_images/tainghe.jpg"  alt="" width="340"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=48"><h3>TAI NGHE</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>


    </div>
</section>
<!--garment section ends-->



<!-- gallery section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

<h1 class="heading"> <span>ƯU ĐÃI TỐT NHẤT </span> </h1>


<div class="icons-container">

<?php

$get_boxes="select * from boxes_section";
$run_box=mysqli_query($con,$get_boxes);
while ($row=mysqli_fetch_array($run_box)) {
    $box_id=$row['box_id'];
    $box_title=$row['box_title'];
    $box_desc=$row['box_desc'];
    $box_icon=$row['box_icon'];
    


  ?>

    <div class="icons">
        <i class="<?php echo $box_icon; ?>"></i>
        <h3><?php echo $box_title ?></h3>
        <p><?php echo $box_desc ?></p>

    </div>

    
    <?php } ?>
</div>

</section>

<!-- deal section ends -->

<!-- newsletter section starts  -->

<section style="  background:linear-gradient(var(--blue),var(--blue)), url(admin_area/product_images/aaa.png) no-repeat;
      background-blend-mode: multiply;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      padding:4rem 4rem;
      text-align: center;
      margin-top: -40rem;
    
  margin: auto;
  width: 80%;
  margin-top: 3rem;

  padding-bottom: 2rem;" class="newsletter" id="newsletter">

    <h1>Bản tin</h1>
    <p>Liên hệ để được giảm giá và cập nhật mới nhất</p>
    <form action="contactus.php" method="post">

                  
                        <input type="text" placeholder="Enter Your Name" ><br>
                   
                    
        <input type="email" placeholder="Enter Your Email">

                        <textarea type="txt" placeholder="Enter Your Message"></textarea>
                  
        <input type="submit" class="btn" >
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<!-- footer section starts  -->



  <footer class="footer" id="footer">
     <div class="cuntainer">
        <div class="wolf">
           
            <div class="footer-ol">
                <h4>Công ty </h4>
                <ul>
                    <li><a href="#">about us</a></li><br><br>
                    <li><a href="#">Dịch Vụ</a></li><br><br>
                    <li><a href="#">chính sách bảo mật</a></li><br><br>
                    <li><a href="#">chương trình liên kết</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li><br><br>
                    <li><a href="#">shipping</a></li><br><br>
                    <li><a href="#">returns</a></li><br><br>
                    <li><a href="#">order status</a></li><br><br>
                    <li><a href="#">payment options</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Saloon Products</a></li><br><br>
                    <li><a href="#">Parlor Prtoducts</a></li><br><br>
                    <li><a href="#">Garments</a></li><br><br>
                    <li><a href="#">Others</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f fa-x" style="color: #3b5998;"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-x" style="color: #0084b4;"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-x" style="color:   #E1306C;"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in fa-x" style="color:  #0077B5 ;"></i></a>

                </div>
            </div>
            <div class="pal">
                
            </div>
            <p class="credit">Copyright &copy; <span>2024-2030</span> | all rights reserved. | <span>Designed With By Macchu</span></p>
        </div>
     </div>
  </footer>

<!-- footer section ends -->
<!-- footer section ends -->

  </nav></div></header>  


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="main/js.js"></script>
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



</body>
</html>

