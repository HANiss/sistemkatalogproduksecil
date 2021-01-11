<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $id =['id'];
    $nama = $_POST['nama'];
    $isi_komentar = $_POST['isi_komentar'];

    $query = mysqli_query($conn, "INSERT INTO komentar  VALUES (' ', '$nama', '$isi_komentar')");

        if($query) {
            header("location:../halaman_admin.php");
           #code...
        }else{
            echo "Gagal";
        }

}
                     ?>   