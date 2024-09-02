<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        Nama :
        <input type="text" name="NIK" value="" class="form-control">	
        NIK :  
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "koneksi1.php";
            $qry_jabatan=mysqli_query($conn,"select * from jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['jabatan'].'</option>';    
            }
            ?>
        </select>
        <input type="submit" name="simpan" value="Tambah Pegawai" >
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>