<?php

    class Connect{

        public function __construct(){
            $server = "localhost";
            $user = "user";
            $pass = "12345678";

            try {
                $this->conn = new PDO("mysql:host=$server;dbname=latihan_get_post", $user, $pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection Failed : ".$e->getMessage();
            }
        }

        public function getDataGet(){
            $sql = "SELECT * FROM tb_barang";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
        }

        public function insertDataGet($nm_barang, $harga){
            $sql = "INSERT INTO tb_barang(nm_barang,harga) VALUES ('$nm_barang',$harga);";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
        }

        public function getDataPost(){
            $sql = "SELECT * FROM tb_pengiriman";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
        }

        public function insertDataPost($kurir, $pengirim, $asal, $tujuan){
            $sql = "INSERT INTO tb_pengiriman(nm_kurir,nm_pengirim,asal,tujuan) VALUES('$kurir','$pengirim','$asal','$tujuan');";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
        }
    }
?>