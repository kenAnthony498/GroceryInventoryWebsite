<?php
    require 'connect.php';
    if (isset($_POST['btn'])) {
        $date=$_POST['idate'];
        $q="select * from inventory_tb where date_ordered='$date'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from inventory_tb";
        $query=mysqli_query($con,$q);
    }
    // Search
    if (isset($_POST['query'])) {
        $keyword=$_POST['query'];
        $q="select * from inventory_tb where project_name='$keyword'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from inventory_tb";
        $query=mysqli_query($con,$q);
    }
?>

<html>

<head>
<link rel="stylesheet" href="CSS/Style.table.css">
    <title>Home</title>
    <?php require 'CSS/misc_BG.php';?>
</head>
<body>
    <?php require 'menu.php';?>

<div class="midDivs">
    <h1>Inventory:</h1>
    <form method="GET">
  <input type="text" name="query" placeholder="Search...">
  <button type="submit">Search</button>
</form>
    <div>
    <table>
    <tr>
        <th>Product Name</th>
        <th>In Stock</th>
        <th>Date Ordered</th>
        <th>Expiration Date</th>
        <th>Storage Location</th>
    </tr>
    <?php  while ($qq=mysqli_fetch_array($query)) { ?>
    <tr>
        <td><?php echo $qq['product_name']; ?></td>
        <td><?php echo $qq['in_stock']; ?></td>
        <td><?php echo $qq['date_ordered']; ?></td>
        <td><?php echo $qq['expiration_date']; ?></td>
        <td><?php echo $qq['storage_location']; ?></td>
    </tr>
    <?php } ?>
    </table>
    
    </div>
        </form>
    </div>
</body>
  
</html>