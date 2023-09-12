<html>
  
<head>
    <link rel="stylesheet" href="CSS/add.css">
    <title>Add New Product</title>
<?php require 'CSS/misc_BG.php';?>

<style>
    label, input{
        margin-top: 8px;
        margin-bottom: 8px;
    }
</style>

</head>
<body>
<?php require 'menu.php';?>
    <div class="midAddDivs">
    <h1>Add New Product</h1>
    <div class="midAddDivs2">
        <form action="btns/add.clik.php" method="POST">
            <div>
                <label style="padding-right:49px;">Product name:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Product name" 
                name="iname" />
            </div>
            <div>
                <label style="padding-right:100px;">Quantity:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Product quantity" 
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
                value="Add" 
                class="btn btn-danger" 
                name="btn">
        </form>
        </div>
    </div>
</body>
  
</html>