
<?php
 session_start();
require './dataserver.php';

$object=new query();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $massage_sub=$_POST['massagesub'];
    $massage=$_POST['massage'];

    $values=array('name'=>$name,'email'=>$email,'phone'=>$phone,'massage_sub'=>$massage_sub,'massage'=>$massage,'status'=>0);
   
    $result=$object->InsertData('contacts',$values);
    
  
    print_r($values);


} if($_SERVER["REQUEST_METHOD"] == "GET"){
    $catagory_result=$object->getData('catagories','','','','catagory_id','ASC','');
}
else{

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css" media="screen" />

    <link rel="stylesheet" href="./css/index_page_style.css">
    <link rel="stylesheet" href="./css/contact_page.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <title>Contact</title>
</head>

<body>
<!--Header part-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark transparent navbar-inverse fixed-top">
        <div class="col-md-9">
            <!-- Brand -->


            <!-- Links -->
            <ul class="navbar-nav">
                <li>
                    <a class="navbar-brand" href="#">Logo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="./About_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-Text" href="./contact.php">Contact</a>
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


<!--Contact form pages-->

    <section class="contact-form container"style="padding-top:108px;">
        <div class="row">
           
            <p style="margin-bottom: 50px;
color: darkcyan;">Feel free to contact us anytime at +880-100-1xxxxxx.
                Or if you prefer, you can drop us a note using the form below. You'll always get a response from a real person — with a real name — within 48 hours.</p>
            <div class="col-md-6">
            <h5 style="text-align: center;
            margin-bottom:25px">Send Us A Message</h5>
                <form action="contact.php" method="POST">
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Your Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label" max="10" >Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" id="phone" name="phone" min="0" max="15"  class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Massage Subject</label>
                        <div class="col-sm-10">
                            <input name='massagesub' type="text" class="form-control" id="inputText" placeholder="Massage Subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Massage</label>
                        <div class="col-sm-10">
                            <input name='massage' type="text" class="form-massage" id="inputText" placeholder="Massage">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary mb-2 justify-end" value="Submit" name="submit"></input>
                </form>
            </div>
            <div class="col-md-6">
                <div style="margin-top:0px;padding-top:135px;padding-bottom:105px;background-image:url('./images/card-images/background.jpg');">
                <h5 style="color:white;margin-bottom:35px;text-align:center;">Address</h5>
                <p style="text-align:center;color:#0B3B24;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                <h5 style="color:white;margin-bottom:35px;text-align:center;">Let's Talk</h5>
                <p style="text-align:center;color:#0B3B24;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                <h5 style="color:white;margin-bottom:35px;text-align:center;">Genaral Support</h5>
                <p style="text-align:center;color:#0B3B24;">industry-assdfge-lkja@assd.com</p>
            </div>
            </div>
        </div>
    </section>

     <!--footer-->
  

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>