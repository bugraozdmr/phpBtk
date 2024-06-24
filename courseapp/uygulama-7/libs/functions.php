<?php
    $yeni_kurs = array(
        "baslik" => "Siber Güvenlik Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Python ile hack uygulamarı yazma",
        "resim" => "4.jpg",
        "yayin_tarihi" => "05.12.2020",
        "yorum_sayisi" => 223,
        "begeni_sayisi" => 1123,
        "onay" => false
    );
    
    array_push($kurslar,$yeni_kurs);
    
    function kurs_ekle(&$kurslar, string $baslik ,string $altbaslik, string $resim,string $yayin_tarihi,int $yorum=0,int $begeni=0,bool $onay=true ){
        global $kurslar;
        $yeni_kurs[count($kurslar) + 1] = array(
            "baslik" => $baslik,
            "alt_baslik" => $altbaslik,
            "resim" => $resim,
            "yayin_tarihi" => $yayin_tarihi,
            "yorum_sayisi" => $yorum,
            "begeni_sayisi" => $begeni,
            "onay" => $onay
        );
    
        // iki dizi elemanı birleştirir
        $kurslar = array_merge($kurslar,$yeni_kurs);
    }
    
    kurs_ekle($kurslar,'Django kurs','ileri seviye Django','1.jpg','10.10.2023');
    
    
    function url_duzenle($baslik){
        return strtolower(str_replace([' ','.',','],['-','',''],$baslik));
    }
    
    function alt_baslik_duzen($alt_baslik){
        return strlen($alt_baslik) > 50 ? 
        $alt_baslik.strtolower(substr($alt_baslik,1,50)).'...' : 
        $alt_baslik;
    }


    if(isset($_GET['q'])){
        $keyword = $_GET['q'];
        //echo $keyword;
        array_filter($kurslar,function($kurs) use ($keyword){
            return stristr($kurs['baslik'],$keyword) or stristr($kurs['alt_baslik'],$keyword);

            /*if(stristr($kurs['baslik'],$keyword) or stristr($kurs['alt_baslik'],$keyword)){
                $kurs['onay'] = true;
            }
            else{
                $kurs['onay'] = false;
            }
            echo $kurs['onay'].' - '.$kurs['baslik'].'<br>';
            */
        });

        /*foreach($kurslar as $kurss){
            echo $kurss['baslik'].'-'.$kurss['onay'];
            echo $kurss['onay'] == false ? 'doru' : 'X';
            echo '<br>'.(gettype($kurss['onay']));
            echo '<br>'.(var_dump($kurs['onay']));
        }*/
    }
?>