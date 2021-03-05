
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container card w-50 mt-5 p-3">
        <p class="h2 text-center mt-2">Belanja Online</p>
        <hr>
        <form action="hasil.php" method="POST">
            <div class="row mb-3">
                <div class="col-2">
                    <label for="">Customer</label>
                </div>
                <div class="col-5">
                    <input type="text" name="customer" class="form-control">
                </div>      
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="">Produk</label>
                </div>
                <div class="col-5">
                    <select name="produk" id="produk" class="form-select">
                        <option value="">Pilih Produk</option>
                        <option value="TV">TV</option>
                        <option value="Kulkas">Kulkas</option>
                        <option value="Mesin Cuci">Mesin Cuci</option>
                        <option value="AC">AC</option>
                    </select>
                </div>      
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="">Jumlah</label>
                </div>
                <div class="col-5">
                    <input type="text" name="jumlah" class="form-control">
                </div>      
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <div class="container w-50 card p-3">
        <p class="h2 text-center">Hasil</p><hr>
        <p>Nama Customer  : <?= $customer; ?></p>
        <p>Pilihan Produk : <?= $produk; ?> </p>
        <p>Jumlah Belanja : <?= $jumlah_barang; ?></p>
        <p>Harga satuan   : <?= $harga; ?></p>    
        <p>Total Belanja  : <?= $jumlah_barang * $harga?></p>
        <p>Potongan Diskon: <?= $total * 0.15; ?> </p>
        <p>Pajak 10%      : <?= ($total - ($total * 0.15)) * 0.10 ?></p>
        <p>Harus dibayar  : <?= ($total - ($total * 0.15)) + ($total - ($total * 0.15)) * 0.10 ?></p>
    </div>
</body>
</html>