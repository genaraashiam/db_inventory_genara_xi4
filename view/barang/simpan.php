<?php 

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$warna = $_POST['warna'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO barang VALUES('$id_barang', '$nama_barang', '$id_jenis',
 '$harga', '$stok', '$warna')");

if ($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
} else {
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
}
