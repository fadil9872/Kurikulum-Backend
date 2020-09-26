<?php

    class Santri{
        public function __construct(){
            $server = "localhost";
            $user = "user";
            $pass = "12345678";

            try {
                $this->conn = new PDO("mysql:host=$server;dbname=evaluasi_3",$user, $pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection Failed: ".$e->getMessage()."\n";
                exit;
            }
        }

        public function read(){
            $sql = "SELECT * FROM santri;";
            $stm = $this->conn->prepare($sql);
            $stm->execute();
            
            $result = $stm->fetchAll(pdo::FETCH_ASSOC);
            return $result;
            
        }

        public function insert(){
            echo "\n\nMenu Input Data\n";
            echo "===============\n\n";

            echo "Ingin input berapa banyak : ";
            $banyak = trim(fgets(STDIN));
            for($i=0;$i<$banyak;$i++){
                echo "Input Nama : ";
                $arr[$i]['nama'] = trim(fgets(STDIN));
                echo "Input Divisi : ";
                $arr[$i]['divisi'] = trim(fgets(STDIN));
                echo "Input Nilai : ";
                $arr[$i]['nilai'] = trim(fgets(STDIN));
                echo "\n";
            }
            
            foreach ($arr as $key => $value) {
                //insert into snatri values('','','')
                $sql = "INSERT INTO santri(nm_santri,divisi,nilai) VALUES('".$value['nama']."','".$value['divisi']."',".$value['nilai'].");";
                $stm = $this->conn->prepare($sql);
                $stm->execute();
            }

            print_r($this->read());
            
        }

        public function update(){
            echo "\n\nMenu Update Data\n";
            echo "================\n\n";
            print_r($this->read());
            echo "\nInput ID Data yang ingin diubah : ";
            $id = trim(fgets(STDIN));
            echo "Input Nama : ";
            $nama = trim(fgets(STDIN));
            echo "Input Divisi : ";
            $divisi = trim(fgets(STDIN));
            echo "Input Nilai : ";
            $nilai = trim(fgets(STDIN));

            $sql = "UPDATE santri SET nm_santri = '".$nama."', divisi='".$divisi."', nilai=".$nilai." WHERE id_santri=".$id.";";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            print_r($this->read());

        }

        public function delete(){
            echo "\n\nMenu Hapus Data\n";
            echo "===============\n\n";
            print_r($this->read());
            echo "\nInput ID Data yang ingin dihapus : ";
            $id = trim(fgets(STDIN));

            $sql = "DELETE FROM santri WHERE id_santri=".$id.";";
            $stm = $this->conn->prepare($sql);
            $stm->execute();

            print_r($this->read());
        }
    }

    $santri = new Santri;

    $kondisi = true;
    while($kondisi){
        echo "=================================\n";
        echo " Program Pengelolaan Data Santri \n";
        echo "=================================\n\n";

        echo "MENU\n";
        echo "====\n";
        echo "1. Read Data\n";
        echo "2. Input Data\n";
        echo "3. Update Data\n";
        echo "4. Delete Data\n";
        echo "5. Exit\n";
        echo "Pilih Menu : ";
        $pilih = trim(fgets(STDIN));
        switch ($pilih) {
            case 1:
                print_r($santri->read());
                echo"\n";
                break;
            case 2:
                $santri->insert();
                break;
            
            case 3:
                $santri->update();
                break;
            
            case 4:
                $santri->delete();
                break;
            case 5:
                exit;
                break;

            default:
                echo "Menu yang anda pilih tidak ada!\n";
                continue;
        }
        echo "Apakah anda ingin menjalankan program lagi ? (Y/N)";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'Y'|| $pilih == 'y'){
            continue;
        }elseif ($pilih == 'N'|| $pilih == 'n') {
            $kondisi = false;
        }


    }

?>