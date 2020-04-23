<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="icon" href="logo.png">
    <title>Landa</title>
  </head>
  <body class="bg-light">
  <h2 class="pt-4 pb-4 ml-5">Rekap Keuangan Per Bulan Februari</h2>
<table class="table table-sm table-bordered table-hover col-7 ml-5 mt-3">
    <tr class="bg-primary text-white">
    <th rowspan=2 class="text-center pt-3" style="font-size:20px;">No</th>
        <th rowspan=2 class="text-center pt-3" style="font-size:20px;">Nama Akun</th>
        <th colspan=29 class="text-center">FEBRUARI 2020</th>
    </tr>
    <tr>
    <?php for($i=1; $i<30; $i++){?>
      <th class="text-center bg-white text-primary font-weight-bold"><?= $i; ?></th>
    <?php } ?>
    </tr>
      

    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM acc_m_akun a LEFT JOIN acc_trans_detail b ON a.id=b.m_akun_id WHERE b.tanggal LIKE '2020-02-%' GROUP BY a.nama ORDER BY a.nama ASC");
    $no=1;?>
    <?php foreach ($data as $d): ?>
       <tr class="text-center">
        <td><?= $no++ ?></td>
        <td class="text-left"><?= $d['nama'] ?></td>
        <!-- 1 -->
        <?php if($d['tanggal']=='2020-02-01'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 2 -->
        <?php if($d['tanggal']=='2020-02-02'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 3 -->
        <?php if($d['tanggal']=='2020-02-03'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 4 -->
        <?php if($d['tanggal']=='2020-02-04'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 5 -->
        <?php if($d['tanggal']=='2020-02-05'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 6 -->
        <?php if($d['tanggal']=='2020-02-06'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 7 -->
        <?php if($d['tanggal']=='2020-02-07'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 8 -->
        <?php if($d['tanggal']=='2020-02-08'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 9 -->
        <?php if($d['tanggal']=='2020-02-09'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 10 -->
        <?php if($d['tanggal']=='2020-02-10'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 11 -->
        <?php if($d['tanggal']=='2020-02-11'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 12 -->
        <?php if($d['tanggal']=='2020-02-12'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 13 -->
        <?php if($d['tanggal']=='2020-02-13'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 14 -->
        <?php if($d['tanggal']=='2020-02-14'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 15 -->
        <?php if($d['tanggal']=='2020-02-15'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 16 -->
        <?php if($d['tanggal']=='2020-02-16'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 17 -->
        <?php if($d['tanggal']=='2020-02-17'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 18 -->
        <?php if($d['tanggal']=='2020-02-18'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 19 -->
        <?php if($d['tanggal']=='2020-02-19'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 20 -->
        <?php if($d['tanggal']=='2020-02-20'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 21 -->
        <?php if($d['tanggal']=='2020-02-21'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 22 -->
        <?php if($d['tanggal']=='2020-02-22'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 23 -->
        <?php if($d['tanggal']=='2020-02-23'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 24 -->
        <?php if($d['tanggal']=='2020-02-24'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 25 -->
        <?php if($d['tanggal']=='2020-02-25'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 26 -->
        <?php if($d['tanggal']=='2020-02-26'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 27 -->
        <?php if($d['tanggal']=='2020-02-27'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 28 -->
        <?php if($d['tanggal']=='2020-02-28'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
        <!-- 29 -->
        <?php if($d['tanggal']=='2020-02-29'){?>
        <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
        <td>0</td>
        <?php } ?>
       </tr>
    <?php endforeach; ?>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>
  </body>
</html>