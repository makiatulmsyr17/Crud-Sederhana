<h3>Data Pasien</h3>
 <table border = "1">
    <tr>
        <th>no</th>
        <th>ID Pasien</th>
        <th>Nama Pasien</th>
        <th>Jenis Kelamin</th>
        <th>Gol Darah</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Tanggal Masuk</th>
        <th>Riwayat Penyakit</th>
        <th colspan ="2"> Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    //Read
    //ambil data sesuai query
    $ambildata = mysqli_query($koneksi, "select * from pasien");
    //agar memnampilkan semua data yang ada di variabel ambil data 
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[ID_Pasien]</td>
            <td>$tampil[Nama_Pasien]</td>
            <td>$tampil[Jenis_Kelamin]</td>
            <td>$tampil[Gol_Darah]</td>
            <td>$tampil[Umur]</td>
            <td>$tampil[Alamat]</td>
            <td>$tampil[Tanggal_Masuk]</td>
            <td>$tampil[Riwayat_Penyakit]</td>
            <td><a href ='?kode=$tampil[ID_Pasien]'> Hapus</a></td>
            <td><a href = 'pasien-ubah.php?kode=$tampil[ID_Pasien]'>Ubah</a></td>
        </tr>";

        $no++;

    }
    ?>
 </table>

 <?php
 //pada saat variabel kode di klik
 if (isset($_GET['kode'])){
//hapus dari tabel pasien ,yg di hapus sesuai kode yg di klik di situ
    mysqli_query($koneksi, "delete from pasien where ID_Pasien ='$_GET[kode]'");
     echo "Data telah Terhapus";
     echo "<meta http-equiv=refresh content=2;URL='pasien-data.php'>";

 }
 ?>