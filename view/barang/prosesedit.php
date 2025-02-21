<?php 

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$warna = $_POST['warna'];

include '../../config/koneksi.php';

$query=mysqli_query($conn,"UPDATE jenis SET nama_barang=$'nama_barang' WHERE nama_barang=$'nama_barang'");

if ($query){
    echo "<script>alert('edit berhasil')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
} else {
    echo "<script>alert('edit gagal')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
}
?>