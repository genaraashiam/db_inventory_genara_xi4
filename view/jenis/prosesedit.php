<?php 

$id_jenis = $_GET['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';

$query=mysqli_query($conn,"UPDATE jenis SET nama_jenis=$'nama_jenis' WHERE nama_jenis=$'nama_jenis'");

if ($query){
    echo "<script>alert('edit berhasil')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
} else {
    echo "<script>alert('edit gagal')</script>";
    echo "<script>window.location.href = 'tambah.php'</script>";
}
?>


