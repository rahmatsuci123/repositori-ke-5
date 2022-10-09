<?php
//ngambil data dari form sebelumnya
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tlahir = $_POST['tlahir'];
$date = $_POST['date'];
$jk = $_POST['jk'];
$alsaya = $_POST['alsaya'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$kota = $_POST['kota'];

$nkk = $_POST['nkk'];
$namaayah = $_POST['namaayah'];
$agamaayah = $_POST['agamaayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$namaibu = $_POST['namaibu'];
$agamaibu = $_POST['agamaibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$alortu = $_POST['alortu'];
?>

<!DOCTYPE html>
<head>
    <title> FORM PENDAFATARAN MAHASISWA BARU 2022</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
        <div class="h2form"></div>
        <div class="tableform"></div>
        <h2 class="h2form">Formulir Pendaftaran Mahasiswa Baru 2022/2023</h2>
    
<table class="tableform" align="center">
    <th><b>DATA MAHASISWA</b></th>
     <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $nama;?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $nisn;?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?php echo $tlahir;?></td>
    </tr>
    
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $date;?></td>
    </tr>
    
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jk;?></td>
    </tr>
    
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alsaya;?></td>
    </tr>
    
    <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><?php echo $email;?></td>
    </tr>
    
    <tr>
        <td>No Hp</td>
        <td>:</td>
        <td><?php echo $nohp;?></td>
    </tr>
    
    <tr>
    <td>Kota</td>
    <td>:</td>
    <td><?php echo $kota;?></td>
    </tr>
    
    <th><b>DATA ORANG TUA</b></th>
            <tr>
                <td>Nomor kartu keluarga</td>
                <td>:</td>
                <td><?php echo $nkk;?></td>
            </tr>
            <tr>
                <td>Nama Ayah Kandung</td>
                <td>:</td>
                <td><?php echo $namaayah;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamaayah;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $pekerjaanayah;?></td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td>:</td>
                <td><?php echo $namaibu;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamaibu;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $pekerjaanibu;?></td>
            </tr>
                <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alortu;?></td>
            </tr>
           
    </table>
</form>
</body>
</html>