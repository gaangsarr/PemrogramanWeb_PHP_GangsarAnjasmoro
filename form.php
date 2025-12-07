<?php
$conn = mysqli_connect("localhost", "root", "", "laprak3_pemweb");

if (isset($_POST['submit'])) {

    $nim = $_POST["NIM"];
    $nama = $_POST["nama"];
    $prodi = $_POST["jurusan"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $alamat = $_POST["alamat"];

    if (!empty($nim) && !empty($nama)) {
        $query = "INSERT INTO formulir(nim, nama, prodi, jenisKelamin, alamat) 
                  VALUES ('$nim', '$nama', '$prodi', '$jenisKelamin', '$alamat')";

        mysqli_query($conn, $query);

        header("Location: dataMahasiswa.php");
    } else {
        echo "Data tidak boleh kosong!";
    }

} else {
    echo "Akses dilarang.";
}
?>