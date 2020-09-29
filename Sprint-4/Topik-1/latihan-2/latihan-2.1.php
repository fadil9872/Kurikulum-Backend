<?php
    include 'Connect.php';
    $conn = new Connect;
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
    <div class="container mt-3 mb-3">
        <h2 class="text-center">Pengelolaan Data Barang</h2>
        <hr class="text-center" style="width:300px; border:1px solid #aaa">  

        <div class="card">
            <div class="mt-3 d-flex justify-content-end">
                <a href="latihan-2.1_tambah_get.php" class="m-2"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah dengan GET</button></a>
                <a href="latihan-2.1_tambah_post.php" class="m-2"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah dengan POST</button></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $data = $conn->getData();
                            foreach($data as $key => $value):
                        ?>
                            <tr>
                                <td><?= $value['kd_barang'] ?></td>
                                <td><?= $value['nm_barang'] ?></td>
                                <td><?= $value['harga'] ?></td>
                                <td><?= $value['jumlah'] ?></td>
                                <td>
                                    <form action="">
                                        <input type="text" name="id_delete" value="<?= $value['kd_barang'] ?>" hidden>
                                        <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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