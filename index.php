<?php include 'koneksi.php';?>
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
  <h2 class="pt-4 pb-2 ml-5">Rekap Keuangan Per Bulan Februari</h2>
  <form method="get">
  <div class="row">
  <div class="input-group mb-3 ml-5 col-4">
  <div class="input-group-prepend">
    <label class="input-group-text bg-primary text-white font-weight-bold" for="inputGroupSelect01">Pilih</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="bulan" required>
    <option selected>Pilih Bulan...</option>
    <option value="01">Januari</option>
    <option value="02">Februari</option>
    <option value="03">Maret</option>
    <option value="04">April</option>
    <option value="05">Mei</option>
  </select>
  <select class="custom-select" id="inputGroupSelect01" name="tahun" required>
    <option selected>Pilih Tahun...</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
  </select>
 <button type="submit" class="btn btn-sm btn-primary ml-3"><i class="fa fa-search"></i>Cari</button>
</div> 
</div>
</form>

<table class="table table-sm table-bordered table-hover col-7 ml-5 mt-3">
    <tr class="bg-primary text-white">
    <th rowspan=2 class="text-center pt-3" style="font-size:20px;">No</th>
        <th rowspan=2 class="text-center pt-3" style="font-size:20px;">Nama Akun</th>
        <th colspan=31 class="text-center">Februari 2020</th>
    </tr>
    <tr>
    <?php 
    $akhir = date("d", strtotime('-1 second', strtotime('+1 month',strtotime('02' . '/01/' . '2020'. ' 00:00:00'))));
    for($i=1; $i<($akhir+1); $i++){?>
      <th class="text-center bg-white text-primary font-weight-bold"><?= $i; ?></th>
    <?php } ?>
    </tr>
      

    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM acc_m_akun a LEFT JOIN acc_trans_detail b ON a.id=b.m_akun_id WHERE b.tanggal LIKE '2020-02-%' GROUP BY a.nama ORDER BY a.nama ASC");
    $no=1;
    ?>
    <?php foreach ($data as $d): ?>
       <tr class="text-center">
        <td><?= $no++ ?></td>
        <td class="text-left"><?= $d['nama'] ?></td>
        <!-- PERULANGAN -->
        <?php for($i=1; $i<$akhir+1; $i++){?>
         <?php if($d['tanggal']=='2020-02-'.sprintf("%02d",$i)){?>
          <td><?= number_format($d['debit']-$d['kredit']) ?></td>
        <?php } else{?>
          <td>0</td>
        <?php } }?>
       </tr>
    <?php endforeach; ?>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>

  </body>
</html>

