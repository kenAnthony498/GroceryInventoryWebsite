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
    <h1>Add New Admin</h1>
    <div class="midAddDivs2">
        <form action="btns/admin.clik.php" method="POST">
            <div>
                <label style="padding-right:60px;">First Name:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="First Name" 
                name="afname" />
            </div>
            <div>
                <label style="padding-right:60px;">Last Name:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Last Name" 
                name="alname" />
            </div>
            <div>
                <label style="padding-right:42px;">Middle Initial:</label>
            <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="M.I" 
                name="amname">
            </div>
            <div>
                <label style="padding-right:120px;">Age:</label> 
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Age" 
                name="adage" />
            <div>
                <label style="padding-right: 90px;">Gender:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Gender" 
                name="adgender" />
            </div>
            <div>
                <label style="padding-right: 52px;">Contact No.:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Contact No." 
                name="adcontact" />
            </div>
            <div>
                <label style="padding-right:27px;">Home Address:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Home Address" 
                name="adhomead" />
            </div>
            <div>
                <label style="padding-right:110px;">Email:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Email" 
                name="ademail" />
            </div>
            <div>
                <label style="padding-right:110px;">Password:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Password" 
                name="ademail" />
            </div>
            <div>
                <label style="padding-right:90px;">Position:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Position" 
                name="adposition" />
            </div>
            <div>
                <label style="padding-right:100px;">Salary:</label>
                <input type="text" 
                class="txtBoxStyle txtBoxStyle2" 
                placeholder="Salary" 
                name="adsalary" />
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" 
                value="Add" 
                class="btn btn-danger" 
                name="btn">
        </form>
        </div>
    </div>
    <div>
            </div>
        </form>
    </div>
</body>
  
</html>