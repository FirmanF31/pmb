<?php
 
 include 'koneksi.php';

 $nama = $_POST['nama'];
 $suami = $_POST['suami'];

 $query = "INSERT INTO test (nama, suami) VALUES ('$nama','$suami')";
 if($conn->query($query)){
     echo 'Berhasil';
     header('location:inc.php');    
 } else {
     echo 'Gagal';
 }



        $tgl_reg = $_POST['tgl_reg'];
        $nama = $_POST['nama'];
        $suami = $_POST['suami'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $alamat = $_POST['alamat'];
        $hpht = $_POST['hpht'];
        $tp = $_POST['tp'];
        $keluhan = $_POST['keluhan'];
        $bb_tb = $_POST['bb_tb'];
        $tfu_lp = $_POST['tfu_lp'];
        $lila = $_POST['lila'];
        $td = $_POST['td'];
        $suhu = $_POST['suhu'];
        $diagnosa = $_POST['diagnosa'];
        $penatalaksanaan = $_POST['penatalaksanaan'];
    
        $query_anc = "INSERT INTO anc (tanggal,nama,suami,tanggal_lahir,alamat,hpht,tp,keluhan,bb_tb,tfu_lp,lila,td,suhu,diagnosa,penatalaksanaan)
         VALUES ('$tgl_reg', '$nama', '$suami', '$tgl_lhr', '$alamat', '$hpht', '$tp', '$keluhan','$bb_tb', '$tfu_lp', '$lila', '$td', '$suhu', '$diagnosa', '$penatalaksanaan')";
         if($conn->query($query_anc)){
            echo 'Berhasil';
            header('location:anc.php');
         } else {
            echo 'Gagal';
        }
    
?>