<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <title>เที่ยวตาก</title>
</head>
<body>
<!-- <nav class="navbar  navbar-expand-xl navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          อำเภอต่างๆ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">เมืองตาก</a>
          <a class="dropdown-item" href="#">บ้านตาก</a>
          <a class="dropdown-item" href="#">สามเงา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" >ติดต่อเรา</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<!------------->
<nav class="navbar fixed-top navbar-dark navbar-expand-md bg-dark justify-content-md-center justify-content-start">
    <a class="navbar-brand d-md-none d-inline" href=""></a>
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="nav-link" href="#_"><i class="fa fa-search mr-1"></i></a> 
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-md-center text-left">
            <li class="nav-item">
                <a class="nav-link" href="?page=first">หน้าหลัก</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=story">ประวัติ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-brand mx-0 d-none d-md-inline" href="?page=first"><img src="img/brand.png" height="50px" srcset=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=amphor" >
              อำเภอต่างๆ
             </a>
              <!-- <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=contact">ติดต่อเรา</a> 
            </li>
        </ul>
        <!-- <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
            <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook mr-1"></i></a> </li>
            <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a> </li>
        </ul> -->
    </div>
</nav>

<!---------------------------------------ส่วนเมนู-----------------------------------------------------> 

<?php 
if(@$_GET['fd'])
	$file=$_GET['fd']."/".$_GET['page'].".php";
else
	$file=@$_GET['page'].".php";
if(is_file($file)){
	require_once("$file");
}
else{
	require_once("first.php");
}
?>

<div class="footer">
    <div class="container" style="background-color : black">
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-3"><a href="#">เมนนูหลัก</a></div>
            <div class="col-3"><a href="#">อำเภอต่างๆ</a> </div>
            <div class="col-3"><a href="#">ติดต่อเรา</a></div>
          </div>
        </div>
        <div class="col-6 contact">

        </div>
      </div>
      <div class="row">
        <div class="col-12" align="center">
          <hr>
            <p class="coppyright">© Copyright Vongsakorn. Since 2020 </p>
        </div>
      </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel(
    {
      stagePadding: 50,
      loop:true,
      responsiveClass:true,
      responsive:{
        0:{
            items:1,
            stagePadding: 30
        },
        600:{
            items:3,
        },
        1000:{
            items:3,
            stagePadding: 0
        }
    }
    }
  );
});
    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
  // options
  cellAlign: 'center',
  contain: true ,
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});


</script>
</html>