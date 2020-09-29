<?php

    class Connect{
        
        public function __construct(){
            $server = "localhost";
            $user = "user";
            $pass = "12345678";

            try {
                $this->conn= new PDO("mysql:host=$server;dbname=latihan_get_post",$user,$pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection Failed : ".$e->getMessage();
            }
        }

        public function getData(){
            $sql = "SELECT * FROM tb_barang2;";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
        }
    }

    $conn = new Connect;
    $conn->getData();
?>