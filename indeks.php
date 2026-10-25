<?php
session_start();

// Proteksi halaman: Jika belum login, tendang kembali ke halaman login.php
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

include 'koneksi.php';

// Proses simpan data saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode     = $_POST['kode'];
    $nama     = $_POST['nama'];
    $kategori = $_POST['kategori']; // Mengambil id_kategori dari select option
    $jumlah   = $_POST['jumlah'];
    $harga    = $_POST['harga'];
    $kondisi  = $_POST['kondisi'];

    $query_insert = "INSERT INTO barang (kode_barang, nama_barang, id_kategori, jumlah, harga_satuan, kondisi) 
                     VALUES ('$kode', '$nama', '$kategori', '$jumlah', '$harga', '$kondisi')";

    if (mysqli_query($koneksi, $query_insert)) {
        header("Location: indeks.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIM-Barang - Inventaris Jurusan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div style="text-align: right; margin-bottom: 20px;">
      <span>Halo, <b><?= htmlspecialchars($_SESSION['user']) ?></b></span> | 
      <a href="logout.php" style="color: red; text-decoration: none; font-weight: bold;">Logout</a>
    </div>
    <h1>SIM-Barang</h1>
    <p>Sistem Pengelolaan Inventaris Barang Jurusan</p>
  </header>

  <nav>
    <ul>
      <li><a href="#inventaris">Inventaris</a></li>
      <li><a href="#form-barang">Tambah Barang</a></li>
    </ul>
  </nav>

  <main>
    <section id="inventaris">
      <h2>Tabel Inventaris Barang</h2>
      <input type="text" id="cari" placeholder="Cari barang...">
      <div class="tabel-wrapper">
        <table>
          <caption>Daftar barang jurusan</caption>
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Jumlah</th>
              <th>Harga Satuan</th>
              <th>Total Estimasi Nilai Aset</th>
              <th>Kondisi</th>
            </tr>
          </thead>
          <tbody>
          <?php
          // Mengambil data barang digabungkan dengan tabel kategori menggunakan LEFT JOIN
          $query = mysqli_query($koneksi, "SELECT barang.*, kategori.nama_kategori FROM barang LEFT JOIN kategori ON barang.id_kategori = kategori.id_kategori");
          while ($row = mysqli_fetch_assoc($query)) {
              $total_aset = $row['jumlah'] * $row['harga_satuan'];
          ?>
          <tr>
              <td><?php echo htmlspecialchars($row['kode_barang']); ?></td>
              <td><?php echo htmlspecialchars($row['nama_barang']); ?></td>
              <td><?php echo htmlspecialchars($row['nama_kategori'] ?? ''); ?></td>
              <td><?php echo htmlspecialchars($row['jumlah']); ?></td>
              <td>Rp <?php echo number_format($row['harga_satuan'], 0, ',', '.'); ?></td>
              <td><strong>Rp <?php echo number_format($total_aset, 0, ',', '.'); ?></strong></td>
              <td><?php echo htmlspecialchars($row['kondisi']); ?></td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </section>

    <section id="form-barang">
      <h2>Formulir Input Barang</h2>
      <form id="form-input" action="" method="post">
        <fieldset>
          <legend>Data Barang</legend>

          <div>
            <label for="kode">Kode Barang</label>
            <input type="text" id="kode" name="kode" placeholder="Contoh: BRG-006" required>
          </div>

          <div>
            <label for="nama">Nama Barang</label>
            <input type="text" id="nama" name="nama" placeholder="Nama barang" required>
          </div>

          <div>
            <label for="kategori">Kategori</label>
            <select id="kategori" name="kategori" required>
              <option value="">-- Pilih kategori --</option>
              <?php
              // Menampilkan pilihan kategori secara dinamis dari tabel database kategori
              $query_kat = mysqli_query($koneksi, "SELECT * FROM kategori");
              while ($kat = mysqli_fetch_assoc($query_kat)) {
                  echo '<option value="' . $kat['id_kategori'] . '">' . htmlspecialchars($kat['nama_kategori']) . '</option>';
              }
              ?>
            </select>
          </div>

          <div>
            <label for="jumlah">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah" placeholder="Contoh: 10" min="1" required>
          </div>

          <div>
            <label for="harga">Harga Satuan (Rp)</label>
            <input type="number" id="harga" name="harga" placeholder="Contoh: 2500000" min="0" required>
          </div>

          <div>
            <label for="kondisi">Kondisi</label>
            <select id="kondisi" name="kondisi" required>
              <option value="">-- Pilih kondisi --</option>
              <option value="Baik">Baik</option>
              <option value="Rusak Ringan">Rusak Ringan</option>
              <option value="Rusak Berat">Rusak Berat</option>
            </select>
          </div>
        </fieldset>

        <button type="submit">Simpan</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 SIM-Barang - Yahya Ayas (062530801597)</p>
  </footer>
  <script src="main.js"></script>
</body>
</html>