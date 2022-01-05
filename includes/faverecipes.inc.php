<?php
    include_once 'dbh.inc.php';

    $name = $_POST['recipename'];
    $url = $_POST['url'];
    $blog = $_POST['blog'];
    $comments = $_POST['comments'];


    $sql = "INSERT INTO faverecipes (name, url, blog, comments) VALUES ('$name', '$url', '$blog', '$comments');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?submit=success");