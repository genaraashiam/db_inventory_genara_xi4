<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis">jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
   <h1>data barang</h1> 
   <br>
   <a href="tambah.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i>data barang</a>
   <br>
   <br>
   <table class="table table-striped">
   <tr>
    <th>no</th>
    <th>id barang</th>
    <th>nama barang</th>
    <th>id jenis</th>
    <th>harga</th>
    <th>stok</th>
    <th>warna</th>
    <th>aksi</th>
   </tr>
   <?php

   include '../../config/koneksi.php';
   $query = mysqli_query($conn, "SELECT * FROM barang");
   $no=1;
   if(mysqli_num_rows($query)){
    while($result=mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $result['id_barang'] ?></td>
            <td><?= $result['nama_barang'] ?></td>
            <td><?= $result['id_jenis'] ?></td>
            <td><?= $result['harga'] ?></td>
            <td><?= $result['stok'] ?></td>
            <td><?= $result['warna'] ?></td>
            
            <td>
                <a href="edit.php?id_barang=<?php echo $result['id_barang']?>" class="btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i>edit </a>
                <a href="">|</a>
                <a href="hapus.php?id_barang=<?php echo $result['id_barang']?>"
                onclick="return confirm('kamu yakin mau hapus barang?')"
                class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> hapus</a>
            </td>
        </tr>
        <?php
        $no++;
    }
   } else {
    echo "data kosong";
   }
   
   ?>
</body>
</html>