<?php
include('connection.php');

$query = "SELECT heading, content FROM blogs";
$res = mysqli_query($con, $query);

$blogs = array();
while ($row = mysqli_fetch_assoc($res)) {
    $blogs[] = $row;
}

header('Content-Type: application/json');
echo json_encode($blogs);
?>
