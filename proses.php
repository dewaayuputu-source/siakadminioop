<?php
session_start();

$data = [
    "nama" => $_POST['nama'],
    "nim" => $_POST['nim'],
    "matkul" => $_POST['matkul'],
    "sks" => $_POST['sks'],
    "nilai" => $_POST['nilai']
];

$_SESSION['data'][] = $data;

header("Location: index.php");