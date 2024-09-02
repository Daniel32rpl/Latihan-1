<?php
if($_POST){
    $jabatan=$_POST['jabatan'];
    $gaji_pokok=$_POST['gaji_pokok'];
    $tunjangan=$_POST['tunjangan'];
    if(empty($jabatan)){
        echo "<script>alert('jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";

    } elseif(empty($gaji_pokok)){
        echo "<script>alert('gaji pokok tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif(empty($tunjangan)){
        echo "<script>alert('tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    }
    else {
        include "koneksi1.php";
        $insert=mysqli_query($conn,"insert into jabatan (jabatan, gaji_pokok, tunjangan) value ('".$jabatan."','".$gaji_pokok."','".$tunjangan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>