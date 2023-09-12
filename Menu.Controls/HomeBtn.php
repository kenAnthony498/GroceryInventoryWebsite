<?php 
$CurntUrl = "http://$_SERVER[REQUEST_URI]";
if ("http://$_SERVER[REQUEST_URI]" === "http:///GroceryWebStore/index.php"){
    echo '
    <form style="background: rgba(125, 107, 26, 0.4);" class="sideForms" action="post" name="Home">
        <p><a class="sideHrefs" href="index.php">Inventory</a></p>
    </form>';
} else {
    echo '
    <form class="sideForms" action="post" name="Home">
        <p><a class="sideHrefs" href="index.php">Inventory</a></p>
    </form>';
}
?>