<?php
    class Perhitungan{
        public static function luasPersegi($panjang, $tinggi){
            return $panjang*$tinggi;
        }

        public static function kelilingPersegi($panjang, $tinggi){
            return 2*($panjang+$tinggi);
        }

        //Lingkaran
        public static function luasLingkaranR($r){
            return 3.14*($r*$r);
        }

        public static function kelilingLingkaranR($r){
            return 2*3.14*$r;
        }

        //Trapesium
        public static function luasTrapesium($a, $b, $t){
            return (($a+$b)/2)*$t;
        }

        public static function kelilingTrapesium($a, $b, $c, $d){
            return $a+$b+$c+$d;
        }
    }

   echo "================================\n";
   echo "PROGRAM PERHITUNGAN BANGUN RUANG\n";
   echo "================================\n\n";

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
                echo "Luas Persegi Panjang = ".Perhitungan::luasPersegi($p,$l);
           }else{
                echo "Input Panjang : ";
                $p = trim(fgets(STDIN));
                echo "Input Lebar : ";
                $l = trim(fgets(STDIN));
                echo "Luas Persegi Panjang = ".Perhitungan::kelilingPersegi($p,$l); 
           }
           break;
       
        case 2:
           echo "Perhitungan Lingkaran\n";
           echo "=====================\n\n";

           echo "1. Hitung luas\n";
           echo "2. Hitung Keliling\n";
           echo "Pilih perhitungan : ";
           $pilih = trim(fgets(STDIN));
           echo "\n";
           if($pilih == 1){
                echo "Input Jari-jari : ";
                $r = trim(fgets(STDIN));
                echo "Luas Persegi Panjang = ".Perhitungan::luasLingkaranR($r);
           }else{
                echo "Input Panjang : ";
                $r = trim(fgets(STDIN));
                echo "Luas Persegi Panjang = ".Perhitungan::kelilingLingkaranR($r); 
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
                echo "Luas Persegi Panjang = ".Perhitungan::luasTrapesium($a, $b, $t);
           }else{
                echo "Input Sisi a : ";
                $a = trim(fgets(STDIN));
                echo "Input Sisi b : ";
                $b = trim(fgets(STDIN));
                echo "Input Sisi c : ";
                $c = trim(fgets(STDIN));
                echo "Input Sisi d : ";
                $d = trim(fgets(STDIN));
                echo "Luas Persegi Panjang = ".Perhitungan::kelilingTrapesium($a, $b, $c, $d); 
           }
            break;
       default:
           echo "Menu yang Anda pilih tidak ada";
           break;
   }
?>