<?php

$conn = mysqli_connect("localhost", "root", "", "laprak3_pemweb");

$nimHapus = $_POST["NIMHAPUS"];

$query = "DELETE FROM formulir WHERE nim = '$nimHapus'";
$result = mysqli_query($conn, $query);

header("Location:dataMahasiswa.php");

?>