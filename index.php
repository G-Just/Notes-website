<!DOCTYPE html>
<html lang="en">

<?php
include "templates/head.php";
include "templates/navbar.php";
include "includes/functions_h.php";
include "includes/dbhandler_h.php";
$data = getAllFolders($conn);
function CreateFolder($title, $description)
{
    echo
    "<div class='folder'>
        <h1 id='folder-title'>$title</h1>
        <p id='folder-description'>$description...</p>
    </div>";
}
?>

<body>
    <div id='folder-grid'>
        <?php foreach ($data as $folder) {
            CreateFolder($folder['folderTitle'], $folder['folderDescription']);
        } ?>
    </div>



</body>

</html>