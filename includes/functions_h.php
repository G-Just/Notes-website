<?php

include "dbhandler_h.php";

function databaseConnectionCheck($stmt, $sql)
{
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../index.php?error=database_connection_failed');
        exit();
    }
}

function getAllFolders($conn)
{
    $sql = "SELECT * FROM folders ;";
    $search = mysqli_query($conn, $sql);
    $result_data = mysqli_fetch_all($search, MYSQLI_ASSOC);
    return $result_data;
}

function createFolder($title, $description, $conn)
{
    $sql = "INSERT INTO folders (folderTitle, folderDescription) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);
    databaseConnectionCheck($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $title, $description);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../login.php?error=folder_created');
}
