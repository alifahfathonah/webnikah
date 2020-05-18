<?php 
ob_start(); 
session_start();
?>
<?php 

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

  $agreement = $_POST['agreement'];
  $submit = $_POST['submit'];

  $kecamatan = 'Waru';
  $desa = 'Tambak Oso';
  $kabupaten = 'Sidoarjo';
  
  $maskawin = $_POST['maskawin'];
  $tgl_nikah = $_POST['tgl-nikah'];
  $dibayar = $_POST['dibayar'];
  $pukul_nikah = $_POST['pukul-nikah'];
  $tempat_nikah = $_POST['alamat-nikah'];

  $nama_pria = $_POST['nama-pria'];
  $bin_pria = $_POST['bin-pria'];
  $tempat_lahir_pria = $_POST['tempat-lahir-pria'];
  $tgl_lahir_pria = $_POST['tgl-lahir-pria'];
  $warganegara_pria = $_POST['warganegara-pria'];
  $agama_pria = $_POST['agama-pria'];
  $pekerjaan_pria = $_POST['pekerjaan-pria'];
  $alamat_pria = $_POST['alamat-pria'];
  $status_pria = $_POST['status-pria'];
  $kodepos_pria = $_POST['kodepos-pria'];
  $telpon_pria = $_POST['telpon-pria'];
//   $ktp_pria = $_POST['ktp-pria'];

  $nama_wanita = $_POST['nama-wanita'];
  $bin_wanita = $_POST['bin-wanita'];
  $tempat_lahir_wanita = $_POST['tempat-lahir-wanita'];
  $tgl_lahir_wanita = $_POST['tgl-lahir-wanita'];
  $warganegara_wanita = $_POST['warganegara-wanita'];
  $agama_wanita = $_POST['agama-wanita'];
  $pekerjaan_wanita = $_POST['pekerjaan-wanita'];
  $alamat_wanita = $_POST['alamat-wanita'];
  $status_wanita = $_POST['status-wanita'];
  $kodepos_wanita = $_POST['kodepos-wanita'];
  $telpon_wanita = $_POST['telpon-wanita'];
//   $ktp_wanita = $_POST['ktp-wanita'];

  $nama_ayah_pria = $_POST['nama-ayah-pria'];
  $tempat_lahir_ayah_pria = $_POST['tempat-lahir-ayah-pria'];
  $tgl_lahir_ayah_pria = $_POST['tgl-lahir-ayah-pria'];
  $warganegara_ayah_pria = $_POST['warganegara-ayah-pria'];
  $agama_ayah_pria = $_POST['agama-ayah-pria'];
  $pekerjaan_ayah_pria = $_POST['pekerjaan-ayah-pria'];
  $alamat_ayah_pria = $_POST['alamat-ayah-pria'];
  $kodepos_ayah_pria = $_POST['kodepos-ayah-pria'];
  $telpon_ayah_pria = $_POST['telpon-ayah-pria'];

  $nama_ibu_pria = $_POST['nama-ibu-pria'];
  $tempat_lahir_ibu_pria = $_POST['tempat-lahir-ibu-pria'];
  $tgl_lahir_ibu_pria = $_POST['tgl-lahir-ibu-pria'];
  $warganegara_ibu_pria = $_POST['warganegara-ibu-pria'];
  $agama_ibu_pria = $_POST['agama-ibu-pria'];
  $pekerjaan_ibu_pria = $_POST['pekerjaan-ibu-pria'];
  $alamat_ibu_pria = $_POST['alamat-ibu-pria'];
  $kodepos_ibu_pria = $_POST['kodepos-ibu-pria'];
  $telpon_ibu_pria = $_POST['telpon-ibu-pria'];
//   $kk_pria = $_POST['kk-pria'];

  $nama_ayah_wanita = $_POST['nama-ayah-wanita'];
  $tempat_lahir_ayah_wanita = $_POST['tempat-lahir-ayah-wanita'];
  $tgl_lahir_ayah_wanita = $_POST['tgl-lahir-ayah-wanita'];
  $warganegara_ayah_wanita = $_POST['warganegara-ayah-wanita'];
  $agama_ayah_wanita = $_POST['agama-ayah-wanita'];
  $pekerjaan_ayah_wanita = $_POST['pekerjaan-ayah-wanita'];
  $kodepos_ayah_wanita = $_POST['kodepos-ayah-wanita'];
  $telpon_ayah_wanita = $_POST['telpon-ayah-wanita'];

  $alamat_ayah_wanita = $_POST['alamat-ayah-wanita'];
  $nama_ibu_wanita = $_POST['nama-ibu-wanita'];
  $tempat_lahir_ibu_wanita = $_POST['tempat-lahir-ibu-wanita'];
  $tgl_lahir_ibu_wanita = $_POST['tgl-lahir-ibu-wanita'];
  $warganegara_ibu_wanita = $_POST['warganegara-ibu-wanita'];
  $agama_ibu_wanita = $_POST['agama-ibu-wanita'];
  $pekerjaan_ibu_wanita = $_POST['pekerjaan-ibu-wanita'];
  $alamat_ibu_wanita = $_POST['alamat-ibu-wanita'];
  $kodepos_ibu_wanita = $_POST['kodepos-ibu-wanita'];
  $telpon_ibu_wanita = $_POST['telpon-ibu-wanita'];
//   $kk_wanita = $_POST['kk-wanita'];

    // ambil data file KTP
    $namaFile1 = $_FILES['ktp-pria']['name'];
    $namaSementara1 = $_FILES['ktp-pria']['tmp_name'];
    $namaFile2 = $_FILES['ktp-wanita']['name'];
    $namaSementara2 = $_FILES['ktp-wanita']['tmp_name'];
    // ambil data file KK
    $namaFile3 = $_FILES['kk-pria']['name'];
    $namaSementara3 = $_FILES['kk-pria']['tmp_name'];
    $namaFile4 = $_FILES['kk-wanita']['name'];
    $namaSementara4 = $_FILES['kk-wanita']['tmp_name'];

    $dirKtp = "file/ktp/";
    $dirKk = "file/kk/";

    $ktpPria = "pria_".$namaFile1;
    $ktpWanita = "wanita_".$namaFile2;
    $kkPria = "pria_".$namaFile3;
    $kkWanita = "wanita_".$namaFile4;

    // pindahkan file
    $ktp_pria = move_uploaded_file($namaSementara1, $dirKtp.$ktpPria);
    $ktp_wanita = move_uploaded_file($namaSementara2, $dirKtp.$ktpWanita);
    $kk_pria = move_uploaded_file($namaSementara3, $dirKk.$kkPria);
    $kk_wanita = move_uploaded_file($namaSementara4, $dirKk.$kkWanita);


 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Cetak</title>
    
</head>
<body>
    <div class="col-md-6 left">
        <table border="0">
            <tr>
                <td>KANTOR DESA/KELURAHAN</td>
                <td>:</td>
                <td><?= $desa ?></td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td>:</td>
                <td><?= $kecamatan ?></td>
            </tr>
            <tr>
                <td>KABUPATEN/KOTA</td>
                <td>:</td>
                <td><?= $kabupaten ?></td>
            </tr>
        </table>
        <table style="text-align: center;" width="100%">
            <tr>
                <td style="text-decoration: underline;"><b>SURAT KETERANGAN UNTUK NIKAH</b></td>
            </tr>
            <tr>
                <td>Nomor : .......................................</td>
            </tr>
            <tr>
                <td>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>1.</td>
                <td>Nama lengkap dan alias</td>
                <td>:</td>
                <td><?= $nama_pria ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat tanggal lahir</td>
                <td>:</td>
                <td><?= $tempat_lahir_pria ?>, <?= $tgl_lahir_pria ?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Warganegara</td>
                <td>:</td>
                <td><?= $warganegara_pria ?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agama</td>
                <td>:</td>
                <td><?= $agama_pria ?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $pekerjaan_pria ?></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Tempat tinggal</td>
                <td>:</td>
                <td><?= $alamat_pria ?> (kodepos: <?= $kodepos_pria ?>)</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Bin</td>
                <td>:</td>
                <td><?= $bin_pria ?></td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Status perkawinan</td>
                <td>:</td>
                <td><?= $status_pria ?></td>
            </tr>
            <tr>
                <td>10.</td>
                <td>No. Telepon </td>
                <td>:</td>
                <td><?= $telpon_pria ?></td>
            </tr>
        </table>
        <!-- <div style="margin-top:10px; text-align: center;"><u><b>SURAT KETERANGAN UNTUK NIKAH</b></u>
        <p style="margin-top:2px;margin-bottom:10px;">Nomor : .......................................</p>
        </div>
        <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
        <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
        <br><br>
        <div class="" style="margin-left:300px;">
            <p>..............,...........................................</p>
            <p>Kepala Desa/Kelurahan ...................</p>
            <br><br><br>
            <p>..................................*)</p>
        </div>
    </div>

    <div class="col-md-6 left">
        <table border="0">
            <tr>
                <td>KANTOR DESA/KELURAHAN</td>
                <td>:</td>
                <td><?= $desa ?></td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td>:</td>
                <td><?= $kecamatan ?></td>
            </tr>
            <tr>
                <td>KABUPATEN/KOTA</td>
                <td>:</td>
                <td><?= $kabupaten ?></td>
            </tr>
        </table>
        <table style="text-align: center;" width="100%">
            <tr>
                <td style="text-decoration: underline;"><b>SURAT KETERANGAN UNTUK NIKAH</b></td>
            </tr>
            <tr>
                <td>Nomor : .......................................</td>
            </tr>
            <tr>
                <td>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>1.</td>
                <td>Nama lengkap dan alias</td>
                <td>:</td>
                <td><?= $nama_wanita ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>Perempuan</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat tanggal lahir</td>
                <td>:</td>
                <td><?= $tempat_lahir_wanita ?>, <?= $tgl_lahir_wanita ?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Warganegara</td>
                <td>:</td>
                <td><?= $warganegara_wanita ?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agama</td>
                <td>:</td>
                <td><?= $agama_wanita ?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $pekerjaan_wanita ?></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Tempat tinggal</td>
                <td>:</td>
                <td><?= $alamat_wanita ?> (kodepos: <?= $kodepos_wanita ?>)</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Bin</td>
                <td>:</td>
                <td><?= $bin_wanita ?></td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Status perkawinan</td>
                <td>:</td>
                <td><?= $status_wanita ?></td>
            </tr>
            <tr>
                <td>10.</td>
                <td>No. Telepon </td>
                <td>:</td>
                <td><?= $telpon_wanita ?></td>
            </tr>
        </table>
        <!-- <div style="margin-top:10px; text-align: center;"><u><b>SURAT KETERANGAN UNTUK NIKAH</b></u>
        <p style="margin-top:2px;margin-bottom:10px;">Nomor : .......................................</p>
        </div>
        <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
        <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
        <br><br>
        <div class="" style="margin-left:300px;">
            <p>..............,...........................................</p>
            <p>Kepala Desa/Kelurahan ...................</p>
            <br><br><br>
            <p>..................................*)</p>
        </div>
    </div>
<!--     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <div style="margin-left:200px;"><u><b>SURAT PERSETUJUAN MEMPELAI</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </div>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table border="0">
                <tr>
                    <td><b>I.</b></td>
                    <td colspan="3"><b>Calon Suami :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td><?= $bin_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_pria ?>, <?= $tgl_lahir_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_pria ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><b>II.</b></td>
                    <td colspan="3"><b>Calon Istri :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td><?= $bin_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_wanita ?>, <?= $tgl_lahir_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_wanita ?></td>
                </tr>
            </table>
            <p>Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</p>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Calon Suami</span><span style="margin-left:200px;">II. Calon Istri</span></p>
                <br><br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:170px;">..................................</span></p>
            </div>
        </div>
        <div class="col-md-6 right">
            <div style="margin-left:200px;"><u><b>SURAT PERSETUJUAN MEMPELAI</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </div>
            <p style="margin-left:10px;">Yang bertanda tangan di bawah ini :</p>
            <table border="0" style="margin-left:10px;">
                <tr>
                    <td><b>I.</b></td>
                    <td colspan="3"><b>Calon Suami :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td><?= $bin_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_pria ?>, <?= $tgl_lahir_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_pria ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><b>II.</b></td>
                    <td colspan="3"><b>Calon Istri :</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Bin</td>
                    <td>:</td>
                    <td><?= $bin_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_wanita ?>, <?= $tgl_lahir_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_wanita ?></td>
                </tr>
            </table>
            <p style="margin-left:10px;">Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</p>
            <p style="margin-left:10px;">Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Calon Suami</span><span style="margin-left:200px;">II. Calon Istri</span></p>
                <br><br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:170px;">..................................</span></p>
            </div>
        </div>
    </div>

    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <table border="0">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td><?= $desa ?></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td><?= $kecamatan ?></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td><?= $kabupaten ?></td>
                </tr>
            </table>
            <!-- <div style="margin-left:200px;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
                <p style="margin-top:2px;">Nomor : .......................................</p>
                </div>
                <p style="margin-left:10px; margin-top: -30px margin-bottom:-30px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
            <table style="text-align: center;" width="100%">
                <tr>
                    <td style="text-decoration: underline;"><b>SURAT KETERANGAN TENTANG ORANG TUA</b></td>
                </tr>
                <tr>
                    <td>Nomor : .......................................</td>
                </tr>
                <tr>
                    <td>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ayah_pria ?>, <?= $tgl_lahir_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ayah_pria ?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?= $kodepos_ayah_pria?></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>No. Telpon</td>
                    <td>:</td>
                    <td><?= $telpon_ayah_pria?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ibu_pria ?>, <?= $tgl_lahir_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ibu_pria ?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?= $kodepos_ibu_pria?></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>No. Telpon</td>
                    <td>:</td>
                    <td><?= $telpon_ibu_pria?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td style="color: white;">II</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_pria ?></td>
                </tr>
            
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tgl_lahir_pria ?>, <?= $tempat_lahir_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>Laki-laki</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_pria ?></td>
                </tr>
        </table>
        <table style="margin-top: -15px;">
                <tr>
                    <td style="color: white;">II</td>
                    <td>6.</td>
                    <td style="padding-right: 75px;">Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_pria ?></td>
                </tr>
            </table>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>

        <div class="col-md-6 right" style="margin-left:20px;">
            <table border="0">
                <tr>
                    <td>KANTOR DESA/KELURAHAN</td>
                    <td>:</td>
                    <td><?= $desa ?></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>:</td>
                    <td><?= $kecamatan ?></td>
                </tr>
                <tr>
                    <td>KABUPATEN/KOTA</td>
                    <td>:</td>
                    <td><?= $kabupaten ?></td>
                </tr>
            </table>
            <!-- <div style="margin-left:200px;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
                <p style="margin-top:2px;">Nomor : .......................................</p>
                </div>
                <p style="margin-left:10px; margin-top: -30px margin-bottom:-30px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
            <table style="text-align: center;" width="100%">
                <tr>
                    <td style="text-decoration: underline;"><b>SURAT KETERANGAN TENTANG ORANG TUA</b></td>
                </tr>
                <tr>
                    <td>Nomor : .......................................</td>
                </tr>
                <tr>
                    <td>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ayah_wanita ?>, <?= $tgl_lahir_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?= $kodepos_ayah_wanita?></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>No. Telpon</td>
                    <td>:</td>
                    <td><?= $telpon_ayah_wanita?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ibu_wanita ?>, <?= $tgl_lahir_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><?= $warganegara_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?= $kodepos_ibu_wanita?></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>No. Telpon</td>
                    <td>:</td>
                    <td><?= $telpon_ibu_wanita?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td style="color: white;">II</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_wanita ?></td>
                </tr>
            
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tgl_lahir_wanita ?>, <?= $tempat_lahir_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>Perempuan</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_wanita ?></td>
                </tr>
        </table>
        <table style="margin-top: -15px;">
                <tr>
                    <td style="color: white;">II</td>
                    <td>6.</td>
                    <td style="padding-right: 75px;">Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_wanita ?></td>
                </tr>
            </table>
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-left:300px;margin-top:-15px;">
                <p>..............,...........................................</p>
                <p>Kepala Desa/Kelurahan ...................</p>
                <br><br>
                <p>..................................*)</p>
            </div>
        </div>
    </div>

    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left" style="border-right:1px dashed #000">
            <div style="margin-left:200px;"><u><b>SURAT IZIN ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </div>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ayah_pria ?>, <?= $tgl_lahir_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ayah_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ayah_pria ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ibu_pria ?>,<?= $tgl_lahir_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ibu_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ibu_pria ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_pria ?>, <?= $tgl_lahir_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_pria ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">memberikan izin kepadanya untuk melakukan pernikahan dengan :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_wanita ?>, <?= $tgl_lahir_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_wanita ?></td>
                </tr>
            </table>
            <table style="margin-top: -15px;">
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td style="padding-right: 75px;">Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_wanita ?></td>
                </tr>
            </table>
            
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px; margin-top:2px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Ayah</span><span style="margin-left:200px;">II. Ibu</span></p>
                <br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:140px;">..................................</span></p>
            </div>
        </div>
        <div class="col-md-6 right">
            <div style="margin-left:200px;"><u><b>SURAT IZIN ORANG TUA</b></u>
            <p style="margin-top:2px;">Nomor : .......................................</p>
            </div>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ayah_wanita ?>, <?= $tgl_lahir_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ayah_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ayah_wanita ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>II.</td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_ibu_wanita ?>,<?= $tgl_lahir_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_ibu_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_ibu_wanita ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">adalah benar ayah kandung dan ibu kandung dari seorang :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_wanita ?>, <?= $tgl_lahir_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_wanita ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_wanita ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">memberikan izin kepadanya untuk melakukan pernikahan dengan :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Nama lengkap dan alias</td>
                    <td>:</td>
                    <td><?= $nama_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Tempat tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir_pria ?>, <?= $tgl_lahir_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Warga negara</td>
                    <td>:</td>
                    <td><?= $warganegara_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama_pria ?></td>
                </tr>
            </table>
            <table style="margin-top: -15px;">
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td style="padding-right: 75px;">Pekerjaan</td>
                    <td>:</td>
                    <td><?= $pekerjaan_pria ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td><?= $alamat_pria ?></td>
                </tr>
            </table>
            
            <p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>
            
            <div class="" style="margin-top:-15px;">
                <p style="margin-left:300px; margin-top:2px;">..............................................,20...........</p>
                <p><span style="margin-left:80px;">I. Ayah</span><span style="margin-left:200px;">II. Ibu</span></p>
                <br>
                <p><span style="margin-left:80px;">..................................</span><span style="margin-left:140px;">..................................</span></p>
            </div>
        </div>    
    </div>
    
    
    <div class="content" style="font-size:12px;">
        <div class="col-md-6 left">
            <table border="0">
                <tr>
                    <td>Lampiran</td>
                    <td>:</td>
                    <td style="padding-right: 290px">...... lembar</td>
                    <td>.............................20...........</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Pemberitahuan</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Kehendak Nikah</td>
                    <td>Kepada Yth.</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Pegawai Pencatat nikah pada</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>KUA Kecamatan/Pembantu PPN</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>di ........................</td>
                </tr>
            </table>
            <!-- <div style="margin-left:200px;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
                <p style="margin-top:2px;">Nomor : .......................................</p>
                </div>
                <p style="margin-left:10px; margin-top: -30px margin-bottom:-30px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
            <table border="0">
                <tr>
                    <td>Assalamualikum wr. wb.</td>
                </tr>
                <tr>
                    <td style="text-align: justify;">
                            Dengan ini kami memberitahukan bahwa kami bermaksud dan melangsungkan pernikahan antara <?= $nama_pria ?> dengan <?= $nama_wanita ?> pada tanggal <?= $tgl_nikah ?> jam <?= $pukul_nikah ?> dengan maskawin <?= $maskawin ?> bertempat di <?= $tempat_nikah ?> dibayar <?= $dibayar ?>
                    </td>
                </tr>
                <tr>
                    <td>
                            Bersama ini kami lampirkan surat-surat yang diperlukan untuk diperiksa sebagai berikut :
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>1.</td>
                    <td>Surat Keterangan Untuk Nikah</td>
                    <td>,</td>
                    <td>Model N1</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Surat Keterangan Asal-Usul</td>
                    <td>,</td>
                    <td>Model N2</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Surat Persetujuan Mempelai</td>
                    <td>,</td>
                    <td>Model N3</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Surat Keterangan Tentang Orang Tua</td>
                    <td>,</td>
                    <td>Model N4</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>*) Surat Izin Orangtua</td>
                    <td>,</td>
                    <td>Model N5</td>
                </tr>           
                <tr>
                    <td>6.</td>
                    <td>*) Surat Keterangan Kematian Suami Istri</td>
                    <td>,</td>
                    <td>Model N6</td>
                </tr>  
            </table>
            <table>
            <tr>
                    <td>7.</td>
                    <?php if(($ktp_pria) && ($ktp_wanita)): ?>
                    <td>Kartu Tanda Penduduk calon mempelai</td>
                    <td>pria dan wanita</td>
                    <?php else: ?>
                    <td>..........................................</td>
                    <td></td>
                    <?php endif; ?>
                    <td></td>
                </tr> 
                 <tr>
                    <td>8.</td>
                    <?php if(($kk_pria) && ($kk_wanita)): ?>
                    <td>Kartu Keluarga Masing-masing calon mempelai</td>
                    <td>pria dan wanita</td>
                    <?php else: ?>
                    <td>..........................................</td>
                    <td></td>
                    <?php endif; ?>
                    <td></td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>..........................................</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>..........................................</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Hanya depat dihadiri dan dicatat pelaksanaanya sesuai dengan ketentuan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="padding-right: 400px"></td>
                    <td style="text-align: center;">Wassalam</td>
                </tr>
                <tr>
                    <td>Diterima tanggal .............</td>
                    <td style="text-align: center;">Yang memberitahukan,</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: center;">Calon mempelai/wali/wakil wali*)</td>
                </tr>
                <tr>
                    <td>Yang menerima,</td>
                    <td></td>
                </tr>
                <tr>
                    <td>PPN/Pembantu PPN*)</td>
                </tr>
            </table>
            <br><br><br>
            <table>
                <tr style="padding-top: 80px;">
                    <td style="padding-right: 300px">.............................**)</td>
                    <td>.........................................**)</td>
                </tr>
                <tr>
                    <td>*) coret yang tidak perlu</td>
                    <td></td>
                </tr>
                <tr>
                    <td>**) nama lengkap</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6 left">
            <table border="0">
                <tr>
                    <td>Lampiran</td>
                    <td>:</td>
                    <td style="padding-right: 290px">...... lembar</td>
                    <td>.............................20...........</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Pemberitahuan</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Kehendak Nikah</td>
                    <td>Kepada Yth.</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Pegawai Pencatat nikah pada</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>KUA Kecamatan/Pembantu PPN</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>di ........................</td>
                </tr>
            </table>
            <!-- <div style="margin-left:200px;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u>
                <p style="margin-top:2px;">Nomor : .......................................</p>
                </div>
                <p style="margin-left:10px; margin-top: -30px margin-bottom:-30px;">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</p> -->
            <table border="0">
                <tr>
                    <td>Assalamualikum wr. wb.</td>
                </tr>
                <tr>
                    <td style="text-align: justify;">
                            Dengan ini kami memberitahukan bahwa kami bermaksud dan melangsungkan pernikahan antara <?= $nama_pria ?> dengan <?= $nama_wanita ?> pada hari <?= $hari_nikah ?> tanggal <?= $tgl_nikah ?> jam <?= $pukul_nikah ?> dengan maskawin <?= $maskawin ?> bertempat di <?= $tempat_nikah ?> dibayar <?= $dibayar ?>
                    </td>
                </tr>
                <tr>
                    <td>
                            Bersama ini kami lampirkan surat-surat yang diperlukan untuk diperiksa sebagai berikut :
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>1.</td>
                    <td>Surat Keterangan Untuk Nikah</td>
                    <td>,</td>
                    <td>Model N1</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Surat Keterangan Asal-Usul</td>
                    <td>,</td>
                    <td>Model N2</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Surat Persetujuan Mempelai</td>
                    <td>,</td>
                    <td>Model N3</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Surat Keterangan Tentang Orang Tua</td>
                    <td>,</td>
                    <td>Model N4</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>*) Surat Izin Orangtua</td>
                    <td>,</td>
                    <td>Model N5</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>*) Surat Keterangan Kematian Suami Istri</td>
                    <td>,</td>
                    <td>Model N6</td>
                </tr>            
            </table>
            <table>
                <tr>
                    <td>7.</td>
                    <?php if(($ktp_pria) && ($ktp_wanita)): ?>
                    <td>Kartu Tanda Penduduk calon mempelai</td>
                    <td>pria dan wanita</td>
                    <?php else: ?>
                    <td>..........................................</td>
                    <td></td>
                    <?php endif; ?>
                    <td></td>
                </tr> 
                 <tr>
                    <td>8.</td>
                    <?php if(($kk_pria) && ($kk_wanita)): ?>
                    <td>Kartu Keluarga Masing-masing calon mempelai</td>
                    <td>pria dan wanita</td>
                    <?php else: ?>
                    <td>..........................................</td>
                    <td></td>
                    <?php endif; ?>
                    <td></td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>..........................................</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>..........................................</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Hanya depat dihadiri dan dicatat pelaksanaanya sesuai dengan ketentuan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="padding-right: 400px"></td>
                    <td style="text-align: center;">Wassalam</td>
                </tr>
                <tr>
                    <td>Diterima tanggal .............</td>
                    <td style="text-align: center;">Yang memberitahukan,</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: center;">Calon mempelai/wali/wakil wali*)</td>
                </tr>
                <tr>
                    <td>Yang menerima,</td>
                    <td></td>
                </tr>
                <tr>
                    <td>PPN/Pembantu PPN*)</td>
                </tr>
            </table>
            <br><br><br>
            <table>
                <tr style="padding-top: 80px;">
                    <td style="padding-right: 300px">.............................**)</td>
                    <td>.........................................**)</td>
                </tr>
                <tr>
                    <td>*) coret yang tidak perlu</td>
                    <td></td>
                </tr>
                <tr>
                    <td>**) nama lengkap</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br><br><br><br><br><br>
        <div class="col-md-6 left">
            <table border="0">
                <tr>
                </tr>
            </table>
            <table style="text-align: center;" width="100%">
                <tr>
                    <td style="text-decoration: underline;"><b>BUKTI UPLOAD FILE SURAT</b></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <!-- <tr>
                    <td>KK PRIA</td>
                </tr>
                <tr>
                    <td><img src="file/kk/<?= $kkPria ?>" width="300px" alt=""></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>KK Wanita</td>
                </tr>
                <tr>
                    <td><img src="file/kk/<?= $kkWanita ?>" width="300px" alt=""></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>KTP PRIA</td>
                </tr>
                <tr>
                    <td><img src="file/ktp/<?= $ktpPria ?>" width="300px" alt=""></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>KTP WANITA</td>
                </tr>
                <tr>
                    <td><img src="file/ktp/<?= $ktpWanita ?>" width="300px" alt=""></td>
                </tr> -->
            </table>
        </div>
    </div>
</body>
</html>

<?php
$filename="Berkas-Pernikahan ".$nama_pria." & ".$nama_wanita.".pdf";
$content = ob_get_clean();
$content = '<page style="font-family: freeserif"><br />'.nl2br($content).'</page>';
// conversion HTML => PDF
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php'); // arahkan ke folder html2pdf
try
{
$html2pdf = new HTML2PDF('P','A4','fr', false, 'ISO-8859-15',array(20, 10, 20, 0)); //setting ukuran kertas dan margin pada dokumen anda
// $html2pdf->setModeDebug();
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>