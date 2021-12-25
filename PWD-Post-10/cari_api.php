<?php
require_once 'config.php';
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $sql = "select * from mahasiswa where nim like'%" . $nim . "%'";
    $tampil = mysqli_query($con, $sql);
} else {
    $sql = "select * from mahasiswa";
    $tampil = mysqli_query($con, $sql);
}
while ($row = mysqli_fetch_assoc($tampil)) {
    $data[] = $row;
}
header('Content-Type: application/json');
echo json_encode($data);
