<html>
<head>
<link rel="stylesheet" href="CSS/update.css">
    <title>Select Product to Update</title>
    <link rel="stylesheet" href="CSS/add.css">
    <?php require 'CSS/misc_BG.php';?>
    <?php require 'connect.php';?>
    <title>Delete Product</title>
</head>
<body>
<?php require 'menu.php';?> 
    <?php $list = "SELECT * FROM inventory_tb";
    $query=mysqli_query($con,$list);
    ?>
    <div class="midDivs">
        <h1>Select Product to Delete</h1>
    </div>
    <div class="midselectDiv2">
        <form action="delete.item.php" method="POST">
            <div>
                <select style="margin-bottom: 20px;" class="SelectTxtBoxStyle SelectTxtBoxStyle2" name="prodToDelete" method="POST">
                <?php
                    while ($qq=mysqli_fetch_array($query)) 
                    { ?>
                    <option value="<?php echo $qq['id'];?>"><?php $name = $qq['product_name'];echo $name;?></option>;
                <?php
                    }
                ?>
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" 
                value="Select" 
                class="btn btn-danger" 
                name="delbtn">
        </form>
    </div>
</body>
</body>
</html>