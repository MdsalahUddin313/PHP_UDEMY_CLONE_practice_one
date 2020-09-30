<?php
 session_start();
require './dataserver.php';

$object=new query();

if($_SERVER["REQUEST_METHOD"] == "GET"){
    // $name=$_POST['name'];
    // $address=$POST['address'];
    // $title=$_POST['title'];
    // $images=$_POST['images'];
    //$massage=$_POST['massage'];
  

    $condition=array('id'=>1);
    $obj=new query();
    $result=$obj->getData('employees','','','','id','ASC','6');
    $product_result=$obj->getData('product_cart_details','','','','id','DESC','');
    $catagory_result=$obj->getData('catagories','','','','catagory_id','ASC','');
}else{
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <<link rel="stylesheet" type="text/css" href="../css/header.css">
    <!--Header part-->
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark transparent navbar-inverse fixed-top">
        <div class="col-md-9">
            <!-- Brand -->


            <!-- Links -->
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="./About_us.php">Blogs</a>
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


                        <a class="dropdown-item" href="./Products/AllProductlist.php"> <?php echo $link["Catagory_name"]?></a>
                       
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
               
                       

                        <a class="dropdown-item"  href="./Users/Admin.php?userid=<?php echo $_SESSION['username'] ?>" style="color:blanchedalmond;font-size:15px;"> <span style="color:black"><i class="fa fa-user" aria-hidden="true"></i> <strong><?php echo $_SESSION['username']; ?></strong></span></a>
               
               
               
                     
                     
                     
                     
                     
                     
                     
                     
                     <a class="dropdown-item"  href="//localhost/Projects/Versity_final_project/php/login/logout.php"><span style="color:black;"></span><i class="fa fa-sign-out" aria-hidden="true"></i>
                     <span style="color:orangered">Log Out </span>  </a>
                     <?php endif ?>
                    </div>
                </li>
                
                







              
   

            </ul>
        </div>
    </nav>


<!--Body part-->

<div class="row">
<section class="catagories container">
        <h3 style="text-align: center;margin-top: 35px;padding: 10px;">Our Team</h3>
        <div class="row">

        <?php
        $i=1;
    if(isset($result[0]) ){
        foreach($result as $link){
            if(!empty($link['id'])){?>
               
        <div class="col-md-6"  style="padding:0px 144px;">
                <img style="display:block;box-shadow:4px 12px 25px 0px gray;border-radius:355px;" class="catagories_images" src="<?php echo $link['images']?>" alt="">
                <p class="catagories-txt"><?php echo $link['name']?><br><?php echo $link['title']?><br><?php echo $link['batch']?><br>Id:<?php  echo $link['our_id']?></p>
                
            </div>
            <?php
            $i++;
             }}} else{
            ?>

            <h1>No data found</h1>
            <?php
             }
            ?>
        </div> 
      
</div>
<!--Footer part-->



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



    

</body>
</html>