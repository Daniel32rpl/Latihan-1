<?php
if($_POST){
    $Nama=$_POST['Nama'];
    $NIK=$_POST['NIK'];
    $Alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['Jenis_kelamin'];
    $no_telp=$_POST['NO TELP'];
    $jabatan= $_POST['jabatan'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($Nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($Alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($jabatan)){
        echo "<script>alert('jabatan tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi1.php";
        $insert=mysqli_query($conn,"insert into pegawai (nama,NIK,alamat,jenis_kelamin, no_telp, jabatan, id_jabatan) value ('".$nama."','".$NIK."','".$alamat."','".$jenis_kelamin."','".$jabatan."','".$id_jabatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>