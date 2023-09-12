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
    <?php $list = "SELECT * FROM admins_tb";
    $query=mysqli_query($con,$list);
    ?>
    <div class="midDivs">
        <h1>Select Admin to Remove</h1>
    </div>
    <div class="midselectDiv2">
        <form action="admin.remove.admin.php" method="POST">
            <div>
                <select style="margin-bottom: 20px;" class="SelectTxtBoxStyle SelectTxtBoxStyle2" name="prodToDelete" method="POST">
                <?php
                    while ($qq=mysqli_fetch_array($query)) 
                    { ?>
                    <option value="<?php echo $qq['admin_id'];?>"><?php $name = $qq['admin_last_name'].", ".$qq['admin_first_name']." ".$qq['admin_initial'];echo $name;?></option>);
                <?php
                    }
                ?>
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" 
                value="Select"
                class="btn btn-danger" 
                name="deladbtn">
        </form>
    </div>
</body>
</body>
</html>