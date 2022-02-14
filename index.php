<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Basic Page Structure</title>
</head>
<body>
<h1>Trucorp-web-2.0</h1>
<?php
$ip="172.18.0.2";
$name="root";
$pass="root";
$dbn="Trucorp";
$con = mysqli_connect($ip,$name,$pass,$dbn);

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["ID"]. " - Nama: " . $row["Nama"]. " - Alamat: " . $row["Alamat"]. " - Jabatan: " . $row["Jabatan"]. "<br>";
  }
} else {
  echo "0 results";
}

$con->close();

?>
</body>
</html>
