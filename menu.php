
<?php

  $searchQuery = $_POST['query'];

  $con = mysqli_connect("localhost", "root", "", "grocerydb");
  if (!$con) {
    die("Cannot connect to the database");
  }

  $searchQuery = mysqli_real_escape_string($con, $searchQuery);

  $query = "SELECT * FROM inventory_tb WHERE product_name LIKE '%$searchQuery%'";
  $result = mysqli_query($con, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<P>$row[product_name]</P>" . "<br>";
  }
  mysqli_close($con);
?>

<link rel="stylesheet" href="CSS/menu.style.css">
<div class="headnav">
    <h3 style="text-align:center;">
        <img src="imgs/Mascot_Logo.png" width="42" height="42" alt="Logo_Img">
        <b>Grocery Inventory Manager </b>
    
        <form style="margin-left:900px; display:inline;" action="logout.php" method="post">
            <input class="btn-danger" type="submit" name="logout" value="Logout">
        </form>
    </h3>
</div>
<?php $name;?>
<div class="sidenav">
    
    <?php require 'Menu.Controls/HomeBtn.php';?>
    
    <h5>Edit</h5>
    
    <?php require 'Menu.Controls/addBtn.php';?>
    <?php require 'Menu.Controls/prod.updtBtn.php';?>
    <?php require 'Menu.Controls/deletebtn.php';?>

    <h5>People</h5>
    

    <?php require 'Menu.Controls/adminsBtn.php';?>
    <?php require 'Menu.Controls/admin.addBtn.php';?>
    <?php require 'Menu.Controls/admin.updateBtn.php';?>
    <?php require 'Menu.Controls/admin.removeBtn.php';?>
</div>