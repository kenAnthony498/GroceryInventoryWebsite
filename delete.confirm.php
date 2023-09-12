<html>
<head>
<link rel="stylesheet" href="CSS/update.css">
    <title>Select Product to Update</title>
    <link rel="stylesheet" href="CSS/add.css">
    <?php require 'CSS/misc_BG.php';?>
    <?php require 'connect.php';?>
    <title>Delete Product</title>
    <?php require 'CSS/misc_BG.php';?>
</head>
<body>
<?php require 'menu.php';?> 
    <div class="midDivs">
        <h1>Confirm:</h1>
    </div>
    <div class="midselectDiv2">
        <form  action="delete.item.php" method="POST">
            <div>
                <label>
                    Are You sure you want to delete this item?
                    This proccess can't be undone! 
                </label>
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" 
                value="delete" 
                class="btn btn-danger" 
                name="delbtn">
            <div style="margin-top: 10px;display: inline;" >
                <input type="submit" 
                value="Cancel" 
                class="btn btn-danger" 
                name="cancelbtn">
        </form>
    </div>
</body>
</html>