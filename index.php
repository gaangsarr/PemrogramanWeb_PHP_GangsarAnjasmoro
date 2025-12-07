<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan 3 | Gangsar Anjasmoro</title>
    <link rel="stylesheet" href="styleForm.css" />
  </head>
  <body>
    <section class="container">
      <div class="judul">Formulir Data Mahasiswa</div>

      <form action="form.php" method="post">
        <div class="cardForm">
          <label for="nim">Nomor Induk Mahasiswa</label>
          <input
            type="text"
            name="NIM"
            id="nim"
            placeholder="Masukkan NIM..."
            required
          />
        </div>

        <div class="cardForm">
          <label for="nama">Nama Lengkap</label>
          <input
            type="text"
            name="nama"
            id="nama"
            placeholder="Masukkan Nama Lengkap..."
            required
          />
        </div>

        <div class="cardForm">
          <label for="jurusan">Program Studi</label>
          <select name="jurusan" id="jurusan" required>
            <option value="" disabled selected>-- Pilih Jurusan --</option>

            <optgroup label="Fakultas Ketenagalistrikan dan Energi Terbarukan">
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Tenaga Listrik">
                Teknik Tenaga Listrik
              </option>
              <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            </optgroup>

            <optgroup label="Fakultas Telematika Energi">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Sains Data">Sains Data</option>
            </optgroup>

            <optgroup label="Fakultas Teknologi dan Bisnis Energi">
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Bisnis Energi">Bisnis Energi</option>
            </optgroup>

            <optgroup label="Fakultas Teknologi Infrastruktur dan Kewilayahan">
              <option value="Teknik Sipil">Teknik Sipil</option>
              <option value="Teknik Geografi">Teknik Geografi</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </optgroup>

            <optgroup label="Sekolah Vokasi">
              <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
              <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
            </optgroup>
          </select>
        </div>

        <div class="cardForm radio-group">
          <label style="display: block; font-weight: bold">Jenis Kelamin</label>
          <label>
            <input
              type="radio"
              name="jenisKelamin"
              value="Laki-Laki"
              required
            />
            Laki-Laki
          </label>
          <label>
            <input type="radio" name="jenisKelamin" value="Perempuan" />
            Perempuan
          </label>
        </div>

        <div class="cardForm">
          <label for="alamat">Alamat</label>
          <textarea
            name="alamat"
            id="alamat"
            placeholder="Masukkan alamat lengkap..."
          ></textarea>
        </div>

        <button type="submit" name="submit">Kirim Data</button>
      </form>
    </section>
  </body>
</html>
