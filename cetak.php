<?php
session_start();

$totalBobot = 0;
$totalSKS = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Cetak KHS</h3>

<table class="table table-bordered">
<tr>
    <th>Matkul</th>
    <th>SKS</th>
    <th>Nilai</th>
</tr>

<?php
if(isset($_SESSION['data'])){
    foreach($_SESSION['data'] as $d){
        $bobot = $d['nilai'] * $d['sks'];
        $totalBobot += $bobot;
        $totalSKS += $d['sks'];

        echo "<tr>
            <td>{$d['matkul']}</td>
            <td>{$d['sks']}</td>
            <td>{$d['nilai']}</td>
        </tr>";
    }
}
?>

</table>

<?php
$ipk = ($totalSKS > 0) ? $totalBobot / $totalSKS : 0;
echo "<h4>IPK: " . number_format($ipk,2) . "</h4>";
?>

<button onclick="window.print()" class="btn btn-primary">Print</button>

</body>
</html>