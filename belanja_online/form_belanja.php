<?php
    include 'logic.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container card p-3 mt-2 w-50 justify-content-center">
        <form action="form_belanja.php" method="POST">
        <h2 class="text-center">Belanja Online</h2>
        <hr>
        <div class="row">
            <div class="col-2">
                <label for="inputCustomer" class="form-label">Customer</label>
            </div>
            <div class="col-5">
                <input id="inputCustomer" type="text" name="customer" class="form-control" placeholder="masukan nama anda" required><br>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-2">
                <label for="inputProduk" class="form-label mr-3">Produk</label>
            </div>
           <div class="col-5">
                <select name="produk" id="inputProduk" class="form-control" required>
                    <option value="">Pilih Produk</option>
                    <option value="TV">TV</option>
                    <option value="Kulkas">Kulkas</option>
                    <option value="Mesin Cuci">Mesin Cuci</option>
                    <option value="AC">AC</option>
                </select>    
           </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="inputJumlah" class="col-form-label mr-3">Jumlah</label>
            </div>
            <div class="col-5">
                <input id="inputJumlah" type="text" name="jumlah" class="form-control" placeholder="Masukan jumlah barang" required><br>
            </div>
        </div>
        <input type="submit" name="proses" class="btn btn-primary" value="simpan">
        </form>
    </div>
    <div class="container card w-50 mt-2 p-3">
        <h2 class="text-center">Hasil</h2>
        <hr>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Nama Customer</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $customer?>" readonly><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Pilihan Produk</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $produk?>" readonly><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Jumlah belanja</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $jumlah_barang?>" readonly><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Harga Satuan</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $harga?>" readonly><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Total Belanja</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $total?>" readonly><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Potongan Diskon</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $diskon; ?>" readonly><br>
            </div>
        </div>  
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Pajak 10%</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $pajak; ?>" readonly><br>
            </div>
        </div>  
        <div class="row">
            <div class="col-3">
                <label for="inputCustomer" class="form-label">Harus Dibayar</label>
            </div>
            <div class="col-5">
                <input class="form-control" value="<?= $bayar; ?>" readonly><br>
            </div>
        </div>  
    </div>
</body>
</html>

