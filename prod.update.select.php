<head>
<link rel="stylesheet" href="CSS/update.css">
    <title>Select Product to Update</title>
    <link rel="stylesheet" href="CSS/add.css">
    <?php require 'CSS/misc_BG.php';?>
    <?php require 'connect.php';?>
</head>
<body>
    <?php require 'menu.php';?> 
    <?php $list = "SELECT * FROM inventory_tb";
    $query=mysqli_query($con,$list);
    ?>
    <div class="midDivs">
        <h1>Select Product to Update</h1>
    </div>
    <div class="midselectDiv2">
        <form action="update.php" method="POST">
            <div value="margin-bottom: 20px">
                <select class="SelectTxtBoxStyle SelectTxtBoxStyle2" name="prodToUpdate" method="POST">
                <?php
                    while ($qq=mysqli_fetch_array($query)) 
                    { ?>
                    <option <?php echo $qq['id'];?>><?php $name = $qq['product_name'];echo $name;?></option>;
                <?php } ?>
            </div>
            <div>
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
            </div>
            <div>
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
            <div style="margin-top: 10px;">
                <input type="submit" 
                value="Select" 
                class="btn btn-danger" 
                name="btn">
        </form>
    </div>
</body>
</html>