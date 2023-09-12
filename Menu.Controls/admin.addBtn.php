<?php
$CurntUrl = "http://$_SERVER[REQUEST_URI]";
if ("http://$_SERVER[REQUEST_URI]" === "http:///GroceryWebStore/admin.add.php"){
    echo '
    <form style="background: rgba(125, 107, 26, 0.4);" class="sideForms" action="post">
        <p><a class="sideHrefs" href="admin.add.php">Add</a></p>
    </form>';
} else {
    echo '
    <form class="sideForms" action="post">
        <p><a class="sideHrefs" href="admin.add.php">Add</a></p>
    </form>';
}
?>