<?php 
  session_start(); 

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

require './php/dataserver.php';

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css" media="screen" />

</head>
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


                        <a class="dropdown-item" href="./php/allproductpages.php"> <?php echo $link["Catagory_name"]?></a>
                       
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