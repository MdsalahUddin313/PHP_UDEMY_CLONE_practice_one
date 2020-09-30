<?php

require '../dataserver.php';

//   if (!isset($_SESSION['username'])) {
//    	$_SESSION['msg'] = "You must log in first";
//    	header('http://localhost/Projects/Versity_final_project/php/login');
//    }
//   if (isset($_GET['logout'])) {
//   	session_destroy();
//   	unset($_SESSION['username']);
//   	header("http://localhost/Projects/Versity_final_project/php/login");
//   }


$values = $_GET['userid'];
//print_r($values);

?>

<?php



$object = new query();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // $name=$_POST['name'];
    // $address=$POST['address'];
    // $title=$_POST['title'];
    // $images=$_POST['images'];
    //$massage=$_POST['massage'];


    $condition = array('username' => $values);
    $obj = new query();
    $userdetails_result = $obj->getData('users', '', $condition, '', 'id', 'DESC', '');
    $student_result = $obj->getData('student_details', '', '', '', 'id', 'ASC', '');
    $teachers_result = $obj->getData('teacher_data', '', '', '', 'id', 'ASC', '');
} else {
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


    <section class="container" style="margin-top:55px;">
        <div class="row">
            <div class="col-md-3">
                <img style="width:80px;height:80px;border-radius:300px;box-shadow: 15px 7px 80px 0px gray;" src="../../images/employees/Christopher_Garbe.jpg" alt="">

                <ul style="list-style-type: none;margin:0;padding:8px;text-decoration:none;">

                    <?php
                    $i = 1;
                    if (isset($userdetails_result[0])) {
                        foreach ($userdetails_result as $link) {
                            if (!empty($link['id'])) { ?>
                                <li style="text-align:left"><a><?php echo $link['username'] ?></a></li>
                                <li style="margin-top:15px;"><a><strong><span><?php echo $link['status'] ?></strong></span></a></li>

                        <?php
                                $i++;
                            }
                        }
                    } else {
                        ?>

                        <a>Not found </a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-9">

                <table class="table">
                    <thead class="thead-dark">

                        <p>Student Data</p>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Massage</th>
                            <th scope="col">phone</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $i = 1;
                        if (isset($student_result[0])) {
                            foreach ($student_result as $link) {
                                if (!empty($link['id'])) {
                        ?>
                                    <tr>


                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $link['name'] ?></td>
                                        <td><?php echo $link['massage'] ?></td>
                                        <td><?php echo $link['phone'] ?></td>
                                        <td><?php echo $link['email'] ?></td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                        } else {


                            ?>
                            <tr>
                                <td>No results found</td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="thead-dark">

                        <p>Tutor's Data</p>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    
                    
                    
                    
                    
                    
                    <tbody>
                        <?php

                        $i = 1;
                        if (isset($teachers_result[0])) {
                            foreach ($teachers_result as $link) {
                                if (!empty($link['id'])) {
                        ?>
                                    <tr>


                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $link['t_name'] ?></td>
                                        <td><?php echo $link['t_address'] ?></td>
                                        <td><?php echo $link['t_phone'] ?></td>
                                        <td><?php echo $link['t_email'] ?></td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                        } else {


                            ?>
                            <tr>
                                <td>No results found</td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

                
            </div>
        </div>
    </section>

    <!--footer part-->

    
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