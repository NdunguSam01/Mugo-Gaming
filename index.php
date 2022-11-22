<?php
include_once './dBConfig.php';
$query="SELECT * FROM products ORDER BY pid ASC";
$result=$db->query($query);
?>
<!DOCTYPE html>
<html>

<div class="product">
    <img src="./Assets/Uploads/ <php echo $row['image'];" alt="Product image">
    <p class="description"><?php echo $row["description"];?></p>
    <p class="price">Kshs<?php echo $row["price"];?></p>
    <button>Add to cart</button>
</div>
</html>