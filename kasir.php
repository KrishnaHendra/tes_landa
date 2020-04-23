<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="icon" href="logo.png">
    <title>Kasir</title>
</head>
<body>
    <div class="container">
            <h3 class="mt-3"><i class="fa fa-store"></i>  Kasir Toko</h3>
        <div class="row mt-3">
            <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="basic-addon1" style="width:90px;">Pembeli</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama Pembeli" name="pembeli" aria-label="pembeli" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="basic-addon1" style="width:90px;">Kasir</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama Kasir" name="kasir" aria-label="kasir" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="row">
        <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="basic-addon1" style="width:90px;">Tanggal</span>
            </div>
            <input type="text" class="form-control font-weight-bold"  value="<?= date('d F Y') ?>" name="tanggal" aria-label="tanggal" aria-describedby="basic-addon1" readonly>
            </div>
        </div>
        <!-- TABLE -->
        <div class="row">
            <a href="" class="mb-2 offset-md-10 col-md-2 text-center font-weight-bold btn btn-sm btn-success" id="tambah"> <i class="fa fa-plus-circle"></i> Tambah Baris Baru</a>
            <table class="table table-bordered" id="penjualan">
                <tr class="bg-primary text-white">
                    <!-- <th>No</th> -->
                    <th class="text-center">Barang</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Harga Satuan</th>
                    <th class="text-center">Diskon</th>
                    <th class="text-center">Total</th>
                    <th><i class="fa fa-edit"></i></th>
                </tr>
                <tbody>
                <form id="data">
                    <?php $no=1;?>
                    <tr>
                    <!-- <td><?= $no++ ?></td> -->
                    <td><input type="text" name="barang" class="form-control text-center" placeholder="Nama Barang" value="Kacang"></td>
                    <td><input name="jumlah[]" type="text" id="jumlah-0" class="hitung form-control text-center" placeholder="Jumlah"></td>
                    <td><input name="satuan[]" type="text" id="satuan-0" class="hitung form-control text-center" placeholder="Harga Satuan"></td>
                    <td><input name="diskon[]" type="text" id="diskon-0" class="hitung form-control text-center" placeholder="Diskon"></td>
                    <td><input name="subtotal[]" type="text" id="total-0" class="total form-control text-center font-weight-bold" readonly="readonly"></td>
                    <td class="text-center"><i class="fa fa-check text-primary"></i></td>
                    </tr>
                    <tbody id="box"></tbody>
                <tr class="table-borderless">
                    <td colspan="7" class="text-right font-weight-bold">
                        <?php $uang=12000 ?>
                        Sub Total : <input type="text" name="alltotal" id="alltotal" class="bg-light font-weight-bold mt-2" style="width:130px;" readonly> <br> 
                        PPN 10% : <input type="text" name="ppn" id="ppn" name="ppn" class="bg-light font-weight-bold mt-2" style="width:130px;" readonly> <br> 
                        Grand total : <input type="text" name="grand" id="grand" class="bg-light font-weight-bold mt-2" style="width:130px;" readonly>
                    </td>
                </tr>
                </form>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    
<script>
// proses menambah inputan
$('#tambah').click(function() {

    var i = $('input').size() + 1,
    n = 2,
    no = n++,
    input = '<tr id="box' + i + '"><a href="#" id="hapus" color="red">hapus</a>';
    // input += '<td>'+ no++ +'</td>';
    input += '<td> <input name="barang" type="text" id="barang' + i + '" class="form-control text-center" placeholder="Nama Barang"> </td>';
    input += '<td> <input name="jumlah[]" type="text" id="jumlah-' + i + '" class="hitung form-control text-center" placeholder="Jumlah"> </td>';
    input += '<td> <input name="satuan[]" type="text" id="satuan-' + i + '" class="hitung form-control text-center" placeholder="Harga Satuan"> </td>';
    input += '<td> <input name="diskon[]" type="text" id="diskon-' + i + '" class="hitung form-control text-center" placeholder="Diskon"> </td>';
    input += '<td> <input name="subtotal[]" type="text" id="total-' + i + '" class="total form-control text-center font-weight-bold" readonly="readonly"> </td>';
    input += '<td class="text-center"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>';
    input += '</tr>';

    $('#box').append(input);

    i++;
    return false;

});


// PROSES HITUNG
$('body').on('focus', '.hitung', function() {
    var id = $(this).attr('id'),
		berhitung = id.split('-');
    $(this).keydown(function() {
        setTimeout(function() {
            var jumlah = ($('#jumlah-' + berhitung[1]).val() != '' ? $('#jumlah-' + berhitung[1]).val() : 0),
                satuan = ($('#satuan-' + berhitung[1]).val() != '' ? $('#satuan-' + berhitung[1]).val() : 0),
                diskon = ($('#diskon-' + berhitung[1]).val() != '' ? $('#diskon-' + berhitung[1]).val() : 0),
                subtotal = (parseInt(jumlah) * parseInt(satuan))-parseInt(diskon);
            if (!isNaN(subtotal)) {
                $('#total-' + berhitung[1]).val(subtotal);
				var alltotal = 0; 
				$('.total').each(function(){
					alltotal += parseFloat($(this).val());
				});
                $('#alltotal').val(alltotal);
                ppn = parseInt(alltotal) * 10/100;
                $('#ppn').val(ppn);
                grand_total = parseInt(alltotal) + parseInt(ppn);
                $('#grand').val(grand_total);
               
            }
        }, 50);
    });
});


$('.table tbody').on('click','.btn', function(){
    $(this).closest('tr').remove();
});
</script>
</body>
</html>