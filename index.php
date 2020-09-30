
<?php 
session_start(); 

require './php/dataserver.php';
?>
<?php 
  

//   if (!isset($_SESSION['username'])) {
//    	$_SESSION['msg'] = "You must log in first";
//    	header('http://localhost/Projects/Versity_final_project/php/login');
//    }
//   if (isset($_GET['logout'])) {
//   	session_destroy();
//   	unset($_SESSION['username']);
//   	header("http://localhost/Projects/Versity_final_project/php/login");
//   }
?>

<?php



$object=new query();

if($_SERVER["REQUEST_METHOD"] == "GET"){
    // $name=$_POST['name'];
    // $address=$POST['address'];
    // $title=$_POST['title'];
    // $images=$_POST['images'];
    //$massage=$_POST['massage'];
  

    $condition=array('id'=>1);
    $obj=new query();
    $product_result=$obj->getData('product_cart_details','','','','id','DESC','');
    $catagory_result=$obj->getData('catagories','','','','catagory_id','ASC','');
  
}else{
   
}
?>
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqra Learning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css" media="screen" />

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark transparent navbar-inverse fixed-top">
        <div class="col-md-9">
            <!-- Brand -->


            <!-- Links -->
            <ul class="navbar-nav">
                <li>
                    <a class="navbar-brand" href="#">Logo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="./php/About_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="./php/contact.php">Contact</a>
                </li>
             

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-Text" href="#" id="navbardrop" data-toggle="dropdown">
                        Catagories
                    </a>
                    <div class="dropdown-menu">
                      
                    <?php
        $i=1;
    if(isset($catagory_result[0]) ){
        foreach($catagory_result as $link){
            if(!empty($link['catagory_id'])){?>


                        <a class="dropdown-item" href="./php/Products/AllProductlist.php"> <?php echo $link["Catagory_name"]?></a>
                       
<?php
                        $i++;
             }}} else{
            ?>

<a>Not found </a>
<?php
             }
?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="navbar-nav">
            
                <li class="nav-item">
                  <a class="nav-link nav-Text" href="#"> <span style="color:aliceblue;font-size:18px;padding:0px 4px;"> <i class="fa fa-cart-plus" aria-hidden="true"></i>
                   </span></a>
                </li>
                <li class="nav-item">
               
                    <a class="nav-link nav-Text" href="//localhost/Projects/Versity_final_project/php/login/login.php"><span style="color:aliceblue;font-size:18px;padding:0px 4px;"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                    </a>
                </li>
 
                
                
                
                <div class="dropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-Text" href="#" id="navbardrop" data-toggle="dropdown">
                      
                    </a>
                    <div class="dropdown-menu" >
                      
                    
                     <?php  if (isset($_SESSION['username'])) : ?>  
               
                       

                        <a class="dropdown-item"  href="./php/Users/Admin.php?userid=<?php echo $_SESSION['username'] ?>" style="color:blanchedalmond;font-size:15px;"> <span style="color:black"><i class="fa fa-user" aria-hidden="true"></i> <strong><?php echo $_SESSION['username']; ?></strong></span></a>
               
               
               
                     
                     
                     
                     
                     
                     
                     
                     
                     <a class="dropdown-item"  href="//localhost/Projects/Versity_final_project/php/login/logout.php"><span style="color:black;"></span><i class="fa fa-sign-out" aria-hidden="true"></i>
                     <span style="color:orangered">Log Out </span>  </a>
                     <?php endif ?>
                    </div>
                </li>
                
                







              
   

            </ul>
        </div>
    </nav>


    

    <!--Carosoul part-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carosoul-image"
                    src="./images/Carosul/images_three.jpeg"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carosoul-image"
                    src="./images/Carosul/image_six.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carosoul-image"
                    src="./images/Carosul/images_seven.jpg"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Catagories Part-->
    <section class="catagories container">
        <h3 style="text-align: center;margin-top: 35px;padding: 10px;">Catagories</h3>
        <div class="row">
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/business.jpg" alt="">
                <p class="catagories-txt">Bussiness</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/finance.jpg" alt="">
                <p class="catagories-txt">Finance</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/it.jpg" alt="">
                <p class="catagories-txt">It& Software</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/design.jpg" alt="">
                <p class="catagories-txt">Design</p>
            </div>
        </div>
        <div class="row container">
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/photography.jpg" alt="">
                <p class="catagories-txt">Photography</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/lifestyle.jpg" alt="">
                <p class="catagories-txt">Life style</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/music.jpg" alt="">
                <p class="catagories-txt">Music</p>
            </div>
            <div class="col-md-3">
                <img class="catagories_images" src="./images/Catagories images/language.jpg" alt="">
                <p class="catagories-txt">Language</p>
            </div>
        </div>
    </section>


    <!--Top Products Show in chart-->

<section class="top_products" >

      <div class="product_show">
          <h5 class="top_product_text" style="text-align: center;">Top Products</h5>
          <div class="row">
          

          <?php
        $i=1;
    if(isset($product_result[0]) ){
        foreach($product_result as $link){
            if(!empty($link['id'])){?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo $link["images"]?>" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><?php echo $link["semititle"] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <?php
            $i++;
             }}} else{
            ?>

            <h1>No data found</h1>
            <?php
             }
            ?>


    
</section>

<h6 style="color:red;text-align:center;padding:15px 15px;"><a style="color:red;text-align:center;padding:15px 15px;" href="./php/Products/AllProductlist.php">View All</a></h6>


<!--Author's video-->

<section class="video_section container">
    <div class="row">
        <div class="col-md-6">

<h1>Why should you take Online Course?</h1> 
<h5>In modern society a large number of students join online courses.It enhance your career oppurtunity and makes your technical skills.</h5>
<h5><span class="" style="color: coral;">If you want to make business with us .it is very big platform for make your business profitable.<br>You can join as teacher and also join with our freelancing platforms.</h5></span>


<p class="get_started_button">Get Started</p>           
        </div>
        <div class="col-md-6">
            <iframe width="460" height="315" src="https://www.youtube.com/embed/s-o89H2jelE?start=5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!--brands sections-->
<section class="brand_logos container">

    <ul class="list_of_brands">
        <li><a href="https://www.hsbc.com/"><img class="list_images" src="./images/Brand logos/two.png" alt="1"></a></li>
        <li><a href="https://www.microsoft.com/en-us/"><img class="list_images" src="./images/Brand logos/three (2).png" alt=""></a></li>
        <li><a href="https://www.hsbc.com/"><img class="list_images" src="./images/Brand logos/four.png" alt=""></a></li>
        <li><a href="https://www.microsoft.com/en-us/"><img class="list_images" src="./images/Brand logos/five.png" alt=""></a></li>
        <li><a href="https://www.microsoft.com/en-us/"><img class="list_images" src="./images/Brand logos/six.png" alt=""></a></li>
     
    </ul>
</section>




<!--Footer part-->

<footer class="footer_part" style="margin-top: 145px;background-color:gray;padding-top:25px;padding-bottom:20px;">
<footer class="footer-part-section">
    <section class="container">

      <div class="row footer_row">
        <div class="col-sm-4">
          <li>Demy for your Business</li>
          <li>Teach on Iqra</li>
          <li>Get the app</li>
          <li>About us</li>
          <li>Contact us</li>
          <!-- <img class="container" style="width:50px;height:50px;align;text-align: end;"src="./images/lgo_one.png" alt="logo"> -->
        </div>
        <div class="col-md-4">
          <li>a format</li>
          <li>Careers</li>
          <li>Blog</li>
          <li>Help and Support</li>
          <li>Affiliate</li>
        </div>
        <div class="col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.539142288185!2d90.40456541449328!3d23.763808294181985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAUST!5e0!3m2!1sbn!2sbd!4v1600414115130!5m2!1sbn!2sbd" width="100%" height="200px" frameborder="0" style="border:0;border-radius:15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </section>


    <div>
      <div style="text-align:center;">
        <a><i style="font-size:30px;color:#0e76a8;background-color:white;border-radius:8px; padding:1px 2px;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a><i style="font-size:30px;color:#0e76a8;background-color:white;border-radius:8px; padding:1px 2px;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
       <a><i  style="font-size:30px;color:gray;background-color:white;border-radius:8px; padding:1px 2px;" class="fa fa-github-square" aria-hidden="true"></i></a>
       <a><i style="font-size:30px;color:#ff4000;background-color:white;border-radius:8px; padding:1px 2px;" class="fa fa-hacker-news" aria-hidden="true"></i></a>
      </div>

      <p style="margin-top:5px;text-align:center; padding-top:25px;color:aliceblue;">&#169 All Rights are reserved by Nabid and S.M Yakub</p>
    </div>

  </footer>
</footer>




<!--Scripting part-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    
</body>

</html>
