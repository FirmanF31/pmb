<?php
include 'koneksi.php';
include 'cek.php';
?>

<html>
<head>
  <title>PMB NENDEN - LAPORAN</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container-sm" >
			
				<div class="data-tables datatable-dark" >
                <h2 >Laporan Pemeriksaan Ibu Bersalin</h2>
			    <h4>ANC Bidan Nenden</h4>
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
					<table class="table table-bordered" id="mauexport" width="95%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama</th>
                                <th>Suami</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>HPHT</th>
                                <th>TP</th>
                                <th>Keluhan</th>
                                <th>BB/TB</th>
                                <th>TFU/LP</th>
                                <th>Lila</th>
                                <th>TD</th>
                                <th>Suhu</th>
                                <th>Diagnosa</th>
                                <th>Penatalaksana</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                            $getdataanc = mysqli_query($conn, "SELECT * FROM anc");
                            while($data=mysqli_fetch_array($getdataanc)){
                                $i = $data['no_reg'];
                                $tgl_reg = $data['tanggal'];
                                $nama = $data['nama'];
                                $suami = $data['suami'];
                                $tgl_lhr = $data['tanggal_lahir'];
                                $alamat = $data['alamat'];
                                $hpht = $data['hpht'];
                                $tp = $data['tp'];
                                $keluhan = $data['keluhan'];
                                $bb_tb = $data['bb_tb'];
                                $tfu_lp = $data['tfu_lp'];
                                $lila = $data['lila'];
                                $td = $data['td'];
                                $suhu = $data['suhu'];
                                $diagnosa = $data['diagnosa'];
                                $penatalaksanaan = $data['penatalaksanaan'];
                                       
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $tgl_reg?></td>
                                <td><?php echo $nama?></td>
                                <td><?php echo $suami?></td>
                                <td><?php echo $tgl_lhr?></td>
                                <td><?php echo $alamat?></td>
                                <td><?php echo $hpht?></td>
                                <td><?php echo $tp?></td>
                                <td><?php echo $keluhan?></td>
                                <td><?php echo $bb_tb?></td>
                                <td><?php echo $tfu_lp?></td>
                                <td><?php echo $lila?></td>
                                <td><?php echo $td?></td>
                                <td><?php echo $suhu?></td>
                                <td><?php echo $diagnosa?></td>
                                <td><?php echo $penatalaksanaan?></td>
                            </tr>
                            <?php
                            };
                            ?>
                            
                        </tbody>
                        
                    </table>
                    <a href="anc.php" class="btn btn-info">Back</a>
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>