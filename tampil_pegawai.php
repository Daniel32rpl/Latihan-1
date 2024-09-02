<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
    <title></title>
</head>
<body>
    <h3>Tampil Pegawai</h3>
    <table class="table table-hover table-stripped">
        <thead>
            <tr>
                <th>No</th><th>Nama </th><th>NIK</th>
                <th>Alamat</th><th>jenis_kelamin</th>
                <th>No_telp</th><th>Jabatan</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi1.php";
            $qry_siswa=mysqli_query($conn,"select*from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan");
            $no=0;
            while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
            $no++?>
            <tr>
                <td><?=$no?></td><td><?=$data_pegawai['nama']?></td>
                <td><?=$data_pegawai['NIK']?></td>
                <td><?=$data_pegawai['alamat']?></td>
                <td><?=$data_pegawai['jenis_kelamin']?></td>
                <td><?=$data_pegawai['no_telp']?></td>
                <td><?=$data_siswa['jabatan']?></td>
                <td><a href="ubah_pegawai.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>"class="btn btn-success">Ubah</a> | <a href="hapus.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" 
                onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>