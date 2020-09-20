<?php
    class Perhitungan{

        public function __construct(){
            echo "MENU\n";
            echo "1. Persegi\n";
            echo "2. Lingkaran\n";
            echo "3. Trapesium\n";
            echo "Pilih Menu : ";
            $menu = trim(fgets(STDIN));
            echo "\n";
            
            switch ($menu) {
                case 1:
                    echo "Perhitungan Persegi Panjang\n";
                    echo "===========================\n\n";

                    echo "1. Hitung luas\n";
                    echo "2. Hitung Keliling\n";
                    echo "Pilih perhitungan : ";
                    $pilih = trim(fgets(STDIN));
                    echo "\n";
                    if($pilih == 1){
                        echo "Input Panjang : ";
                        $p = trim(fgets(STDIN));
                        echo "Input Lebar : ";
                        $l = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->luasPersegi($p,$l);
                    }else{
                        echo "Input Panjang : ";
                        $p = trim(fgets(STDIN));
                        echo "Input Lebar : ";
                        $l = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->kelilingPersegi($p,$l);
                    }

                    break;
                
                case 2:
                    echo "Perhitungan Lingkaran\n";
                    echo "===========================\n\n";

                    echo "1. Hitung luas\n";
                    echo "2. Hitung Keliling\n";
                    echo "Pilih perhitungan : ";
                    $pilih = trim(fgets(STDIN));
                    echo "\n";
                    if($pilih == 1){
                        echo "Input Jari-jari : ";
                        $r = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->luasLingkaranR($r);
                    }else{
                        echo "Input Jari-jari : ";
                        $r = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->luasLingkaranR($r);
                    }
                    break;
                
                case 3:
                    echo "Perhitungan Trapesium\n";
                    echo "=====================\n\n";

                    echo "1. Hitung luas\n";
                    echo "2. Hitung Keliling\n";
                    echo "Pilih perhitungan : ";
                    $pilih = trim(fgets(STDIN));
                    echo "\n";
                    if($pilih == 1){
                        echo "Input Sisi a : ";
                        $a = trim(fgets(STDIN));
                        echo "Input Sisi b : ";
                        $b = trim(fgets(STDIN));
                        echo "Input Tinggi : ";
                        $t = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->luasTrapesium($a, $b, $t);
                   }else{
                        echo "Input Sisi a : ";
                        $a = trim(fgets(STDIN));
                        echo "Input Sisi b : ";
                        $b = trim(fgets(STDIN));
                        echo "Input Sisi c : ";
                        $c = trim(fgets(STDIN));
                        echo "Input Sisi d : ";
                        $d = trim(fgets(STDIN));
                        echo "Luas Persegi Panjang = ".$this->kelilingTrapesium($a, $b, $c, $d); 
                   }
                break;
                    
                default:
                    echo "Menu yang Anda pilih tidak ada";
                    break;
            }
        }

        public function luasPersegi($panjang, $tinggi){
            return $panjang*$tinggi;
        }

        public function kelilingPersegi($panjang, $tinggi){
            return 2*($panjang+$tinggi);
        }

        //Lingkaran
        public function luasLingkaranR($r){
            return 3.14*($r*$r);
        }

        public function kelilingLingkaranR($r){
            return 2*3.14*$r;
        }

        //Trapesium
        public function luasTrapesium($a, $b, $t){
            return (($a+$b)/2)*$t;
        }

        public function kelilingTrapesium($a, $b, $c, $d){
            return $a+$b+$c+$d;
        }
    }

   $perhitungan = new Perhitungan;
?>