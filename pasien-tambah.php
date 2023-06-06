<h3>Tambah Pasien</h3>
<form action="" method="post">
<table>
    <tr>
        <td width = "130">ID pasien</td>
        <td> <input type="text" name="ID_Pasien"></td>
    </tr>
    
    <tr>
        <td width = "130">Nama Pasien</td>
        <td> <input type="text" name="Nama_Pasien"></td>
    </tr>
    <tr>
        <td width = "130">Jenis Kelamin</td>
        <td> <input type="text" name="Jenis_Kelamin"></td>
    </tr>
    <tr>
        <td width = "130">Gol Darah</td>
        <td> <input type="text" name="Gol_Darah"></td>
    </tr>
    <tr>
        <td width = "130">Umur</td>
        <td> <input type="text" name="Umur"></td>
    </tr>
    <tr>
        <td width = "130">Alamat</td>
        <td> <input type="text" name="Alamat"></td>
    </tr>
    <tr>
        <td width = "130">Tanggal Masuk</td>
        <td> <input type="date" name="Tanggal_Masuk"></td>
    </tr>
    <tr>
        <td width = "130">Riwayat Penyakit</td>
        <td> <input type="text" name="Riwayat_Penyakit"></td>
    </tr>
    <tr>
        <td width = "130">Riwayat Penyakit</td>
        <td> <input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php

include "koneksi.php";

if(isset($_POST['proses'])){
    //creat
    mysqli_query($koneksi,"insert into pasien set 
    ID_Pasien = '$_post[ID_Pasien]',
    Nama_Pasien = '$_POST[Nama_Pasien]',
    Jenis_Kelamin = '$_POST[Jenis_Kelamin]',
    Gol_Darah = '$_POST[Gol_Darah]',
    Umur = '$_POST[Umur]',
    Alamat = '$_POST[Alamat]',
    Tanggal_Masuk = '$_POST[Tanggal_Masuk]',
    Riwayat_Penyakit = '$_POST[Riwayat_Penyakit]'") or die (mysqli_error($koneksi));

    echo "Data Pasien Baru Telah TERsimpan ";
}
?>

