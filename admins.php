<?php
    require 'connect.php';
    $id = 1;
    if (isset($_POST['btn'])) {
        $q="select * from admins_tb where admin_id='$id'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from admins_tb";
        $query=mysqli_query($con,$q);
    }
?>

<html>
<head>
<title>Admins</title>

    <link rel="stylesheet" href="CSS/Style.table.css">

    <?php require 'CSS/misc_BG.php';?>
</head>
<body>
<?php require 'menu.php';?>
<div class="midDivs">
    <h1 style="position:relative;">Admins</h1>
    <div>
    <table>
    <tr>
        <th class="t_l">Admin</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact No.</th>
        <th>Home Address</th>
        <th>Email</th>
        <th>Position</th>
        <th class="t_r">Salary</th>
    </tr>
    <?php  while ($qq=mysqli_fetch_array($query)) { ?>
    <tr>
        <td><?php echo $qq['admin_last_name'].", ".$qq['admin_first_name']." ".$qq['admin_initial']; ?></td>
        <td><?php echo $qq['age']; ?></td>
        <td><?php echo $qq['gender']; ?></td>
        <td><?php echo $qq['contact_no']; ?></td>
        <td><?php echo $qq['address']; ?></td>
        <td><?php echo $qq['email']; ?></td>
        <td><?php echo $qq['position']; ?></td>
        <td><?php echo "₱".$qq['salary']; ?></td>
    </tr>
    <?php } ?>
    </table>
    
    </div>
</div>

</body>
</html>