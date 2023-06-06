<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "select * from pasien where ID_Pasien='$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>



<h3>Tambah Pasien</h3>
<form action="" method="post">
<table>
    <tr>
        <td width = "130">ID pasien</td>
        <td> <input type="text" name="ID_Pasien" value="<?php echo $data['ID_Pasien']; ?>"></td>
    </tr>
    
    <tr>
        <td width = "130">Nama Pasien</td>
        <td> <input type="text" name="Nama_Pasien" value="<?php echo $data['Nama_Pasien']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Jenis Kelamin</td>
        <td> <input type="text" name="Jenis_Kelamin"  value="<?php echo $data['Jenis_Kelamin']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Gol Darah</td>
        <td> <input type="text" name="Gol_Darah"  value="<?php echo $data['Gol_Darah']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Umur</td>
        <td> <input type="text" name="Umur" value="<?php echo $data['Umur']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Alamat</td>
        <td> <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Tanggal Masuk</td>
        <td> <input type="date" name="Tanggal_Masuk" value="<?php echo $data['Tanggal_Masuk']; ?>"></td>
    </tr>
    <tr>
        <td width = "130">Riwayat Penyakit</td>
        <td> <input type="text" name="Riwayat_Penyakit" value="<?php echo $data['Riwayat_Penyakit']; ?>"></td>
    </tr>
    <tr>
        <td ></td>
        <td> <input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php

include "koneksi.php";
//jika tombol roses di klik jlankan query
if(isset($_POST['proses'])){
    // query update
    mysqli_query($koneksi,"update pasien set 
    Nama_Pasien = '$_POST[Nama_Pasien]',
    Jenis_Kelamin = '$_POST[Jenis_Kelamin]',
    Gol_Darah = '$_POST[Gol_Darah]',
    Umur = '$_POST[Umur]',
    Alamat = '$_POST[Alamat]',
    Tanggal_Masuk = '$_POST[Tanggal_Masuk]',
    Riwayat_Penyakit = '$_POST[Riwayat_Penyakit]'
    where ID_Pasien = '$_GET[kode]'") or die (mysqli_error($koneksi));

    echo "Data Pasien Baru Telah DI Ubah";
    echo "<meta http-equiv=refresh content=1;URL='pasien-data.php'>";
} 
?>

