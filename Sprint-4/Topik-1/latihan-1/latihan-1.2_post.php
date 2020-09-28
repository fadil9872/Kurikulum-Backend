<?php
    include 'Connect.php';
    $kelas = new Connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body >
    <h2 class="text-center pt-5">Halaman Form POST</h2>
    <div class="container mb-5">
        <div style="border:5px solid rgba(0,0,0,0.4); border-radius: 10px;">
            <form action="" method="POST" class="pt-3 m-5" >
                <div class="from-group">
                    <label for="nm_kurir">Nama Kurir</label>
                    <input type="text" class="form-control" name="nm_kurir" id="nm_kurir">
                </div>
                <div class="from-group">
                    <label for="nm_pengirim">Nama Pengirim</label>
                    <input type="text" class="form-control" name="nm_pengirim" id="nm_pengirim">
                </div>
                <div class="from-group">
                    <label for="asal">Asal Barang</label>
                    <input type="text" class="form-control" name="asal" id="asal">
                </div>
                <div class="from-group">
                    <label for="tujuan">Tujuan Barang</label>
                    <input type="text" class="form-control" name="tujuan" id="tujuan">
                </div>
                <input type="submit" class="btn btn-primary btn-lg mt-3" name="submit" value="Submit">
            </form>
            <?php 
                if(isset($_POST['submit'])){
                    $kurir = $_POST['nm_kurir'];
                    $pengirim = $_POST['nm_pengirim'];
                    $asal = $_POST['asal'];
                    $tujuan = $_POST['tujuan'];

                    $kelas->insertDataPost($kurir, $pengirim, $asal, $tujuan);
                }
            ?>
        </div>
        <div class="mt-4" style="border:5px solid rgba(0,0,0,0.4); border-radius: 10px;">
            <h4 class="text-center mt-3 mb-3">Data Barang</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kurir</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Asal Barang</th>
                    <th scope="col">Tujuan Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $data = $kelas->getDataPost();
                        $i = 1;
                        foreach($data as $key => $value):
                    ?>           

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $value['nm_kurir'] ?></td>
                            <td><?= $value['nm_pengirim'] ?></td>
                            <td><?= $value['asal'] ?></td>
                            <td><?= $value['tujuan'] ?></td>
                        </tr>

                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>