// ===== Ambil elemen =====
const form = document.getElementById("form-input");
const inputKode = document.getElementById("kode");
const inputJumlah = document.getElementById("jumlah");
const inputCari = document.getElementById("cari");
const barisTabel = document.querySelectorAll("tbody tr");

// ===== 1. Validasi form saat submit =====
form.addEventListener("submit", function (e) {
  const kode = inputKode.value.trim();
  const jumlah = Number(inputJumlah.value);
  const polaKode = /^BRG-\d+$/;

  // Cek format kode barang
  if (!polaKode.test(kode)) {
    e.preventDefault();
    alert("Kode barang harus diawali BRG- diikuti angka, contoh: BRG-001");
    return;
  }

  // Validasi jumlah barang
  if (isNaN(jumlah) || jumlah <= 0) {
    e.preventDefault();
    alert("Jumlah harus angka lebih dari 0");
    return;
  }

  // Jika semua valid, biarkan form submit secara normal ke PHP (jangan di-preventDefault)
});

// ===== 2. Filter tabel real-time =====
inputCari.addEventListener("input", function () {
  const kataKunci = inputCari.value.toLowerCase();

  barisTabel.forEach(function (baris) {
    const teks = baris.textContent.toLowerCase();
    baris.style.display = teks.includes(kataKunci) ? "" : "none";
  });
});

// ===== 3. Toast =====
function tampilToast(pesan) {
  const toast = document.createElement("div");
  toast.className = "toast";
  toast.textContent = pesan;
  document.body.appendChild(toast);
  
  setTimeout(function () {
    toast.remove();
  }, 3000);
}