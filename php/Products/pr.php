<?php

include '../dataserver.php';
$c_id;
 $values = $_GET['pid'];
//$sql_th=("SELECT * FROM users where id='$values'");

?>

<?php
session_start();
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // $name=$_POST['name'];
    // $address=$POST['address'];
    // $title=$_POST['title'];
    // $images=$_POST['images'];
    //$massage=$_POST['massage'];


    $condition_arr = array('id' => $values);
    $obj = new query();
    $p_result = $obj->getData('product_cart_details', '*', $condition_arr, '', '', '', '');
    //$catagory_result=$obj->getData('catagories','','','','catagory_id','ASC','');

} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" ref="stylesheet" href="product.css">

    <style>
        .links {}
    </style>
</head>

<body>

    <section class="product container" style="margin-top:55px;padding:20px 20px;" >
        <div class="card">
            <div class="card-header">
                Product
            </div>
            <div class="card-body">
                <div class="row">

                    <?php
                    $i = 1;
                    if (isset($p_result[0])) {
                        foreach ($p_result as $link) {
                            if (!empty($link['id'])) { ?>

                                <div class="col-md-4">
                                    <h5 class="card-title">
                                        <h1><?php echo $link['title'];  ?>
                                    </h5>
                                    <p class="card-text"><strong><?php echo $link['semititle'];  ?></strong></p>
                                    <p><strong><?php echo $link['creator_name'];  ?></strong></p>
                                    <p style="margin-top:35px;"><span style="color:darksalmon;font-size:15px;font-style:bold;padding:5px 15px;border-radius:15px;background-color:honeydew;">
                                            <h1><?php echo $link['Price'];  ?></h1>
                                        </span></p>
                                 
                                    <ul class="links" style="list-style-type: none;font-size:20px; padding:8px;color:darkblue;font-size: 15px;text-decoration:none;">
                                        <li><span style="font-size:15px;color:orange;"><i class="fa fa-star" aria-hidden="true"></i>Rating:<?php echo $link['rating_star'];  ?></span></li>
                                        <li><span style="font-size:15px;color:indigo;"><i class="fa fa-font" aria-hidden="true"></i>Language<?php echo $link['creator_name'];  ?></span></li>
                                        <li><span style="font-size:15px;color:indigo;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>Last Update <?php echo $link['language'];  ?></li>
                                    </ul>

                                    <a href="#" class="btn btn-primary">Buy</a>
                                    <a href="#" class="btn btn-outline-danger"><span style="color:coral"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </span>Add To Cart</a>
                                </div>
                                <div class="col-md-8 justify-content-end">

                                    <img class="justify-content-end" style="width:100%; height:350px" src="<?php echo $link['images'];  ?>" alt="">


                                </div>
                </div>

                <div class="descriptions">
                <p style="font-size:20px;margin-top:35px;padding:20px 0px">Description</p>
                                    <p><?php echo $link['description'];  ?></p>
                </div>

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
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>