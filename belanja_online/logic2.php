<?php

    // variable kosong
    $customer = '';
    $produk = '';
    $jumlah_barang = '';
    $harga = '';
    $total = '';
    $diskon = '';
    $pajak = '';
    $bayar = '';

    // cek kondisi jika undefined
    $customer = isset($_POST['customer']) ? $_POST['customer']: '';
    $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah_barang = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';


    // cek kondisi pilihan produk
    switch($produk){
        case 'TV':
            $harga = 1250000;
            $total = $jumlah_barang * $harga;
            $diskon = $total * 0.15;
            break;
        case 'Kulkas':
            $harga = 1800000;
            $total = $jumlah_barang * $harga;
            $diskon = $total * 0.15;
            break;
        case 'Mesin Cuci':
            $harga = 3400000;
            $total = $jumlah_barang * $harga;
            $diskon = $total * 0.15;
            break;
        case 'AC':
            $harga = 3100000;
            $total = $jumlah_barang * $harga;
            $diskon = $total * 0.15;
            break;
    }




?>