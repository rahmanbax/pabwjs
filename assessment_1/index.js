function jumlahDanSelect() {
  var jumlah = document.getElementById("jumlah").value;
  var select_opt = document.getElementById("select_option").value;

  if (jumlah == "") {
    alert("Textfield jumlah kosong");
  }

  if (jumlah != "") {
    if (!buku.find(({ nama }) => nama === select_opt)) {
      alert("Buku tidak ditemukan");
    } else {
      if (jumlah > buku.find(({ nama }) => nama === select_opt).jumlah) {
        alert("Jumlah buku tidak tersedia")
      }
      else if (jumlah <= buku.find(({ nama }) => nama === select_opt).jumlah) {
        alert("Silahkan ambil buku anda")
      }
    }
  }
}

let buku = [
  { nama: "sherlock", jumlah: 2 },
  { nama: "lupin", jumlah: 2 },
  { nama: "aladin", jumlah: 2 },
];
