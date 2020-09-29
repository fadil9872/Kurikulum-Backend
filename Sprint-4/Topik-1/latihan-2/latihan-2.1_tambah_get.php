<?php 
    include 'Connect.php';
    $conn =  new Connect;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />

    <title>Data Barang</title>
  </head>
  <body>
    <div class="container mt-3">
        <h2 class="text-center">Halaman Tambah Data</h2>
        <hr class="text-center" style="width:300px; border:1px solid #aaa">
        <h6 class="text-center">Input data menggunakan methode GET</h6>

        <div class="card mt-3">
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nm_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nm_barang" id="nm_barang">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="harga">Harga Satuan</label>
                                <input type="text" class="form-control" name="harga" id="harga">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" id="jumlah">
                            </div>
                        </div>
                    </div>
                    <input style="width:130px; float: right;" type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
                <?php
                    if(isset($_GET['submit'])){
                        $nm_barang = $_GET['nm_barang'];
                        $harga = $_GET['harga'];
                        $jumlah = $_GET['jumlah'];

                        $conn->insertDataGet($nm_barang,$harga,$jumlah);

                        header("Location: latihan-2.1.php");
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>