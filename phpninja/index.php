<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP ninja</title>
</head>
<body>

<h2><?php echo strToUpper('products')?></h2>

<?php 
  $products = [
    ['name' => 'shiny', 'price' => 50.99],
    ['name' => 'starting', 'price' => 10.99],
    ['name' => 'final', 'price' => 99.89],
    ['name' => 'lighting', 'price' => 56.99]
  ];
  // forEach($products as $product){
  //   echo $product['name'].' = $'.$product['price'].'<br/>';
  // }
?>

<ul>
  <?php forEach($products as $product) {?> 
    <li>Name: <?php echo $product['name']; ?></li>
    <p>Cost $<?php echo $product['price']; ?></p>
  <?php } ?>
</ul>

<?php  ?>









</body>
</html>