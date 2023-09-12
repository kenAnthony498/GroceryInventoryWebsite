<?php
    $con=mysqli_connect("localhost","root","","grocerydb");
    if(!$con)
    {
    die("cannot connect to server");
    }
    if(isset($_POST['btn2']))
    {   
        $id=$_POST['prodToUpdate'];
        $item_stock=$_POST['iqty'];
        $dateOrder=$_POST['idateOrder'];
        $dateExpr=$_POST['idateExpr'];
        $Location=$_POST['ilocation'];

        $q= "UPDATE inventory_tb SET in_stock='$item_stock', 
        date_ordered='$dateOrder', expiration_date='$dateExpr', storage_location='$Location' where id = $id";
        $query=mysqli_query($con,$q);
        header('location: http://localhost/GroceryWebStore/index.php');
    }

?>
<html>
  
<head>
    <link rel="stylesheet" href="CSS/Style.table.css">
    <link rel="stylesheet" href="CSS/add.css">
    <title>Update List</title>
    <?php require 'connect.php';?>
    <?php require 'CSS/misc_BG.php';?>
</head>
  
<body>
    <?php require 'menu.php';?>
    <div class="midDivs">
    <h1>Update Product</h1>
    </div>
    <div class="midAddDivs2">
        <form action="" method="POST">
            <div>
                <label style="padding-right:49px;" name="ProdUpdate">Product name:</label>
                
            </div>
            <div>
                <label style="margin-top: 20px;padding-right:100px;">Quantity:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Quantity"
                name="iqty" />
            </div>
            <div>
                <label style="padding-right:80px;">Order Date:</label>
            <input type="date" 
                class="txtBoxStyle" 
                placeholder="Date" 
                name="idateOrder">
            </div>
            <div>
                <label style="padding-right:80px;">Expiry Date:</label> 
                <input type="date" 
                class="txtBoxStyle" 
                placeholder="Product quantity" 
                name="idateExpr" />
            <div>
                <label style="padding-right:27px;">Storage Location:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Storage Location" 
                name="ilocation" />
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" 
                value="Update" 
                class="btn btn-danger" 
                name="btn2">
            </div>
        </form>
    </div>
</body>
  
</html>