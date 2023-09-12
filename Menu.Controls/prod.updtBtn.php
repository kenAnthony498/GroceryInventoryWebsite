<?php 
$CurntUrl = "http://$_SERVER[REQUEST_URI]";
if ("http://$_SERVER[REQUEST_URI]" === "http:///GroceryWebStore/prod.update.select.php" ||
    "http://$_SERVER[REQUEST_URI]" === "http:///GroceryWebStore/prod.update.php"){
    echo '
    <form style="background: rgba(125, 107, 26, 0.4);" class="sideForms" action="post" name="Update">
        <p><a class="sideHrefs" href="prod.update.select.php">Update</a></p>
    </form>';
} else {
    echo '
    <form class="sideForms" action="post" name="Update">
        <p><a class="sideHrefs" href="prod.update.select.php">Update</a></p>
    </form>';
}
?>