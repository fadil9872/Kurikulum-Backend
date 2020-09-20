<?php
    class Perhitungan{
        public static function luasPersegi($panjang, $tinggi){
            if($panjang<=0 || $tinggi<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
            return $panjang*$tinggi;
        }

        public static function kelilingPersegi($panjang, $tinggi){
            if($panjang<=0 || $tinggi<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
            return 2*($panjang+$tinggi);
        }

        //Lingkaran
        public static function luasLingkaranR($r){
            if($r<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
            return 3.14*($r*$r);
        }

        public static function kelilingLingkaranR($r){
            if($r<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
            return 2*3.14*$r;
        }

        //Trapesium
        public static function luasTrapesium($a, $b, $t){
            if($a<=0 || $b<=0 || $t<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
            return (($a+$b)/2)*$t;
        }

        public static function kelilingTrapesium($a, $b, $c, $d){
            if($a<=0 || $b<=0 || $c<=0 || $d<=0){
                throw new Exception("Nilai tidak boleh kurang dari atau sama dengan 0\n");
                
            }
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
                try {
                    $hasil = Perhitungan::luasPersegi($p,$l);
                    echo "Luas Lingkaran = ".$hasil;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
           }else{
                echo "Input Panjang : ";
                $p = trim(fgets(STDIN));
                echo "Input Lebar : ";
                $l = trim(fgets(STDIN));
                try {
                    $hasil = Perhitungan::kelilingPersegi($p,$l);
                    echo "Luas Lingkaran = ".$hasil;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
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
                try {
                    $hasil = Perhitungan::luasLingkaranR($r);
                    echo "Luas Lingkaran = ".$hasil;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
           }else{
                echo "Input Panjang : ";
                $r = trim(fgets(STDIN));
                try {
                    $hasil = Perhitungan::kelilingLingkaranR($r);
                    echo "Keliling Lingkaran = ".$hasil;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
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
                try {
                    $hasil = Perhitungan::luasTrapesium($a,$b,$t);
                    echo "Luas Persegi Panjang = ".$hasil."\n";
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
           }else{
                echo "Input Sisi a : ";
                $a = trim(fgets(STDIN));
                echo "Input Sisi b : ";
                $b = trim(fgets(STDIN));
                echo "Input Sisi c : ";
                $c = trim(fgets(STDIN));
                echo "Input Sisi d : ";
                $d = trim(fgets(STDIN));
                try {
                    $hasil = Perhitungan::kelilingTrapesium($a, $b, $c, $d);
                    echo "Luas Persegi Panjang = ".$hasil;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                 
           }
            break;
       default:
           echo "Menu yang Anda pilih tidak ada";
           break;
   }
?>