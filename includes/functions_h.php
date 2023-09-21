<?php

include "dbhandler_h.php";

function getAllFolders($conn)
{
    $sql = "SELECT * FROM folders ;";
    $search = mysqli_query($conn, $sql);
    $result_data = mysqli_fetch_all($search, MYSQLI_ASSOC);
    return $result_data;
}
