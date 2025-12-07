<?php
$conn = mysqli_connect("localhost", "root", "", "laprak3_pemweb");
$query = "SELECT * FROM formulir";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="styleData.css">
</head>
<body>

  <div class="container">
    <h2 class="judul">Daftar Data Mahasiswa</h2>

    <div class="top-action">
      <a href="index.html">+ Tambah Data Baru</a>
      <span class="info-text">Menampilkan data dari tabel <b>formulir</b>.</span>
    </div>

    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['prodi']; ?></td>
              <td><?php echo $row['jenisKelamin']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <div>
        <h2 class="judul">Hapus Data</h2>
        <form action="hapusData.php" method="post">
            <div class="cardForm">
                <label for="nim">Nomor Induk Mahasiswa</label>
                <input
                    type="text"
                    name="NIMHAPUS"
                    id="nim"
                    placeholder="Masukkan NIM..."
                    required
                />
            </div>
            <button type="submit" name="submit">Hapus Data</button>
        </form>
    </div>
  </div>

</body>
</html>
