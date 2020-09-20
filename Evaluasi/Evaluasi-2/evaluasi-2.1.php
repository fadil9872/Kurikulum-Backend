<?php
    class Register{
        public static $student = [
        '0'=> [
                'nik' =>'T001',
                'name' => 'Arief'
            ],
        '1'=>[
                'nik' =>'T002',
                'name' => 'Bambang'
            ]
        ];

        public static function insertStudent(){
            echo "\nInsert Data Santri Baru\n";
            echo "=======================\n\n";

            echo "Input NIK : ";
            $nik = trim(fgets(STDIN));
            echo "Input Nama : ";
            $name = trim(fgets(STDIN));

            $index = count(self::$student);

            self::$student[$index]['nik'] = $nik;
            self::$student[$index]['name'] = $name;

            print_r(self::$student);
        }
    }

    class Pengelolaan extends Register{
        // public function __construct($program){
        //     if($program == "update"){
        //         $this->updateStudent();
        //     }elseif($program == "delete"){
        //         $this->deleteStudent();
        //     }   
        // }

        public function updateStudent(){
            echo "\nUbah Data Santri Baru\n";
            echo "=======================\n\n";

            echo "DAFTER SANTRI\n";
            print_r(parent::$student);
            $data = parent::$student;

            echo "Inpukan NIK data yang ingin diubah : ";
            $nik = trim(fgets(STDIN));
            foreach($data as $key => $value){
                if($data[$key]['nik'] == $nik){
                    echo "Input Nama Baru : ";
                    $data[$key]['name'] = trim(fgets(STDIN));
                }
            }
            print_r($data);
            parent::$student = $data;

        }

        public function deleteStudent(){
            echo "\nHapus Data Santri Baru\n";
            echo "=======================\n\n";

            echo "DAFTER SANTRI\n";
            print_r(parent::$student);
            $data = parent::$student;

            echo "Inpukan NIK data yang ingin dihapus : ";
            $nik = trim(fgets(STDIN));
            foreach($data as $key => $value){
                if($data[$key]['nik'] == $nik){
                    unset($data[$key]);
                }
            }
            $data = array_slice($data,0,count($data));
            print_r($data);
            parent::$student = $data;
        }
    }

    $kondisi = true;
    while ($kondisi) {
        echo "========================================\n";
        echo "SISTEM INFORMASI PENDAFTARAN SANTRI BARU\n";
        echo "========================================\n\n";

        echo "MENU\n";
        echo "====\n";
        echo "1. Insert Data Baru\n";
        echo "2. Ubah Data\n";
        echo "3. Hapus Data\n";
        echo "Pilih Menu  : ";
        $menu = trim(fgets(STDIN));
        
        switch ($menu) {
            case 1:
                Register::insertStudent();
                break;
            
            case 2:
                $kelola = new Pengelolaan;
                $kelola->updateStudent();
                break;

            case 3:
                $kelola = new Pengelolaan("delete");
                break;  

            default:
                echo "MENU YANG ANDA INPUT TIDAK ADA\n";
                break;
        }
        echo "\nApakah Anda masih ingin menjalankan program ? (y/n)";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'n'){
            $kondisi = false;
        }

    }
    
    
?>