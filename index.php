<!DOCTYPE html>
<html lang="en">

<?php
include "templates/head.php";
include "templates/navbar.php";
include "includes/functions_h.php";
include "includes/dbhandler_h.php";
$folderData = getAllFolders($conn);
function createFolderComponent($id, $title, $description)
{
    echo
    "<div class='folder' onclick='selectFolder($id)'>
        <h1 id='folder-title'>$title</h1>
        <p id='folder-description'>$description...</p>
    </div>";
}
?>

<body>
    <div id='folder-grid'>
        <?php foreach ($folderData as $folder) {
            createFolderComponent($folder['folderID'], $folder['folderTitle'], $folder['folderDescription']);
        } ?>
    </div>
</body>

<script src="./scripts/script.js"></script>

</html>