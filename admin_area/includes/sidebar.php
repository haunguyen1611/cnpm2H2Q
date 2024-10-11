<?php  
if (!isset($_SESSION['admin_email'])) {

  echo "<script>window.open('login.php','_self')</script>";
  } else {

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		
			<span class="sr-only"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>

		</button>
		<a href="index.php?dashboard" class="navbar-brand"><span>Bảng điều khiển Admin</span></a>
	</div>
	
		<div class="dropdown">
		 <button onclick="myFunction()" class="dropbtn"><i class="fa fa-user"></i> <?php echo $admin_name; ?></a></button>

			  <div id="myDropdown" class="dropdown-content">
    <a href="index.php?user_profile?id=<?php echo $admin_id ?>"><i class="fa fa-fw-user"></i>Hồ sơ</a>
    <a href="index.php?view_product"><i class="fa fa-fw-envelope"></i>Sản phẩm

     <span class="badge"><?php echo $count_pro ?></span></a>


    <a href="index.php?view_customer"><i class="fa fa-fw-users"></i>Khách hàng 
      <span class="badge"><?php echo $count_cust ?></span></a>
    </a>
    <a href="index.php?pro_cat"><i class="fa fa-fw-gear"></i>Danh mục sản phẩm
        <span class="badge"><?php echo $count_p_cat ?></span></a>
    </a>
   
    <a class="divider" href="logout.php"> Đăng xuất <i class="fa fa-fw fa-power-off"></i></a>

  </div>
				
		</div>	
	<div class="collapse navbar-collapse navbar-ex1-collapse">	
	<ul class="nav navbar-nav side-nav">
  <li>
    <a href="index.php?dashboard"><i class="fa fa-bar-chart"></i> Bảng điều khiển</a>
  </li>
  <li class="button-dropdown" id="#products">
    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#products"><i class="fa fa-fw fa-table"></i> Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>

    <ul class="dropdown-menu" id="products">
      <li>
        <a href="index.php?insert_product">Thêm sản phẩm</a>
      </li>
      <li>
        <a href="index.php?view_product">Xem sản phẩm</a>
      </li>
     </ul>
  </li>
  <li class="button-dropdown" id="#products_cat">
    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#products_cat"><i class="fa fa-fw fa-table"></i> Danh mục sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>

    <ul id="#products_cat" class="dropdown-menu">
      <li>
        <a href="index.php?insert_product_cat">Thêm danh mục sản phẩm</a>
      </li>
      <li>
        <a href="index.php?view_product_cat">Xem danh mục sản phẩm</a>
      </li>
     </ul>
  </li>
  <li class="button-dropdown" id="#category">
    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#category"><i class="fa fa-fw fa-table"></i> Danh mục <i class="fa fa-fw fa-caret-down"></i></a>

    <ul id="#category" class="dropdown-menu">
      <li>
        <a href="index.php?insert_categories">Thêm danh mục</a>
      </li>
      <li>
        <a href="index.php?view_categories">Xem danh mục</a>
      </li>
     </ul>
  </li>

<li class="button-dropdown" >
  <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#boxes">
    <i class="fa fa-fw fa-table"></i> Phần hộp <i class="fa fa-fw fa-caret-down"></i>
  </a>
  <ul id="#boxes" class="dropdown-menu">
    <li>
      <a href="index.php?insert_box">Thêm hộp</a>
    </li>
     <li>
      <a href="index.php?view_box">Xem hộp</a>
    </li>

  </ul>
</li>

  <li class="button-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#slider"><i class="fa fa-fw fa-table"></i> Trình chiếu <i class="fa fa-fw fa-caret-down"></i></a>

    <ul id="#slider" class="dropdown-menu">
      <li>
        <a href="index.php?insert_slider">Thêm trình chiếu</a>
      </li>
      <li>
        <a href="index.php?view_slider">Xem trình chiếu</a>
      </li>
     </ul>
  </li>
  <li>
  	<a href="index.php?view_customer">
  		<i class="fa fa-fw fa-edit"></i> Xem khách hàng
  	</a>
  </li>
  <li>
  	<a href="index.php?view_order">
  		<i class="fa fa-fw fa-list"></i> Xem đơn hàng
  	</a>
  </li>
  <li>
  	<a href="index.php?view_payments">
  		<i class="fa fa-fw fa-money"></i> Xem thanh toán
  	</a>
  </li>
  <li class="button-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-table"></i> Người dùng <i class="fa fa-fw fa-caret-down"></i></a>

    <ul id="#users" class="dropdown-menu">
      <li>
        <a href="index.php?insert_user">Thêm người dùng</a>
      </li>
      <li>
        <a href="index.php?view_user">Xem người dùng</a>
      </li>
      <li>
        <a href="index.php?user_profile=<?php echo $admin_id ?>">Chỉnh sửa hồ sơ</a>
      </li>
     </ul>
  </li>
  
</ul>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</nav>

<script>
	$('.collapse > .a').click(function(){
       $(this).parent().siblings().find('li').fadeOut(500);
       $(this).next('li').stop(true,false,true).fadeToggle(500);
       return false;
	});

</script>
<script>
/* Khi người dùng bấm nút,
chuyển đổi giữa việc ẩn và hiện nội dung dropdown */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })
});
</script>

<?php } ?>
