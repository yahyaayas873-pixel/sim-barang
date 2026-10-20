# SIM-Barang

## Gambaran Proyek
Sistem Informasi Manajemen Barang (SIM-Barang) adalah aplikasi berbasis web yang dirancang untuk membantu pengelolaan dan pencatatan inventaris barang secara efisien. Sistem ini ditujukan untuk admin/pengelola gudang agar dapat melakukan pencatatan stok, penambahan barang baru, pembaruan data, hingga penghapusan barang secara terstruktur.

## Konsep HTTP
### Request
HTTP Request adalah pesan yang dikirimkan oleh klien (browser) ke server untuk meminta informasi atau melakukan suatu tindakan tertentu.
Isi dari HTTP Request meliputi:
- **Method**: Jenis aksi yang ingin dilakukan (misal: `GET` untuk mengambil data, `POST` untuk mengirim data baru, `PUT`/`PATCH` untuk memperbarui data, `DELETE` untuk menghapus data).
- **URL (Uniform Resource Locator)**: Alamat tujuan request (contoh: `http://localhost/sim-barang/api/barang`).
- **Header**: Informasi tambahan mengenai request, seperti tipe konten (`Content-Type: application/json`), informasi browser (`User-Agent`), token otentikasi (`Authorization`), dll.
- **Body**: Data yang dikirim bersamaan dengan request (biasanya digunakan pada method `POST` atau `PUT`).

### Response
HTTP Response adalah pesan balasan yang dikirimkan oleh server kepada klien setelah menerima dan memproses request.
Isi dari HTTP Response meliputi:
- **Status Code**: Kode angka 3 digit yang menunjukkan hasil request (contoh: `200 OK` untuk berhasil, `201 Created` untuk sukses membuat data, `404 Not Found` jika halaman/resource tidak ditemukan, `500 Internal Server Error` jika terjadi kesalahan di server).
- **Header**: Informasi tambahan dari server, seperti tipe konten balasan (`Content-Type: application/json`), konfigurasi cache, tanggal/waktu, dll.
- **Body**: Data utama yang dikembalikan oleh server kepada klien, bisa berupa kode HTML, data format JSON, gambar, atau file media lainnya.

### Contoh
Salah satu contoh request dan response nyata dari tab **Network** di DevTools browser saat melakukan pencarian atau pengambilan data barang:

- **Request URL**: `http://localhost/sim-barang/index.php`
- **Request Method**: `GET`
- **Status Code**: `200 OK`
- **Request Headers**:
  - `Accept: text/html,application/xhtml+xml`
  - `User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)`
- **Response Headers**:
  - `Content-Type: text/html; charset=UTF-8`
  - `Server: Apache/2.4.54`
- **Response Body**: Berisi seluruh markup HTML halaman utama aplikasi SIM-Barang.

## Teknologi yang Digunakan
**HTML**: Untuk struktur dasar tampilan web.
- **CSS**: Untuk penataan gaya dan tata letak (*styling*).
- **JavaScript**: Untuk interaktivitas dan pemrosesan di sisi klien (*client-side*).
- **PHP**: Untuk pemrosesan logika aplikasi di sisi server (*server-side*).
- **MySQL**: Sebagai sistem manajemen basis data (*database*).

## Identitas
- Nama: Yahya Ayas
- NIM: 062530801597
- Kelas: 3IB