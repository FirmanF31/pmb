<?php
session_start();

//Membuat koneksi ke database

$host="localhost";
$user="root";
$password="";
$db="pmb";

$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
    die("Koneksi berhasil;".mysqli_connect_error());
}

//<--cek connection-->
// if($conn){
//     echo 'berhasil';
// }

//Menambahkan ANC
// if(isset($_POST['addnewpasien'])){
//     $tgl_reg = $_POST['tgl_reg'];
//     $nama = $_POST['nama'];
//     $suami = $_POST['suami'];
//     $tgl_lhr = $_POST['tgl_lhr'];
//     $alamat = $_POST['alamat'];
//     $hpht = $_POST['hpht'];
//     $tp = $_POST['tp'];
//     $keluhan = $_POST['keluhan'];
//     $bb_tb = $_POST['bb_tb'];
//     $tfu_lp = $_POST['tfu_lp'];
//     $lila = $_POST['lila'];
//     $td = $_POST['td'];
//     $suhu = $_POST['suhu'];
//     $diagnosa = $_POST['diagnosa'];
//     $penatalaksana = $_POST['penatalaksana'];

//     $addtotable = mysqli_query($conn, "insert into anc (NULL,tanggal,nama,suami,tanggal_lahir,alamat,hpht,tp,keluhan,bb_tb,tfu_lp,lila,td,suhu,diagnosa,penatalaksanaan)
//      values ('$tgl_reg', '$nama', '$suami', '$tgl_lhr', '$alamat', '$hpht', '$tp', '$keluhan','$bb_tb', '$tfu_lp', '$lila', '$td', '$suhu', '$diagnosa', '$penatalaksana')");
//      if($addtotable){
//         header('location:index.php');
//      } else {
//         echo 'Gagal';
//         header('location:index.php');
//     }
// }

//menambah inc
   
?>