<?php 
  session_start(); 
  ?>
<?php

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
    $product_result=$obj->getData('product_cart_details','','','','id','DESC','');
   // $catagory_result=$obj->getData('catagories','','','','catagory_id','ASC','');
  
}else{
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link ref="stylesheet" type="text/css" href="../css/alproduct.css" media="screen">
    <style>
    
.price {
    color: rgb(85, 84, 84);
    font-size: 22px;
  }
  
.card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }
  
.card button:hover {
    opacity: 0.7;
  }
    </style>
  </head>





<body>

  <?php
        $i=1;
    if(isset($product_result[0]) ){
        foreach($product_result as $link){
            if(!empty($link['id'])){?>  
  <div class="col-md-3">
      <div class="card">
        <img src="<?php echo $link["images"]?>" alt="Denim Jeans" style="width:100%">
        <h1><?php echo $link["creator_name"]?></h1>
        <p class="price"><?php echo $link["Price"]?></p>
        <p><?php echo $link["title"]?></p>
        <p><button>View</button><button>Add to Cart</button></p>
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
  

</body>
</html>