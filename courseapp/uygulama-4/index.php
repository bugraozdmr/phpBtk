<!DOCTYPE html>
<html lang="tr">

<?php

$categories = array(
    array("cat_name" => "Programlama",'active'=>true),
    array("cat_name" => "Siber Güvenlik",'active'=>false),
    array("cat_name" => "Veri Analizi",'active'=>false)
);

$kurslar = array(
    "Kurs_1" => array(
        "baslik" => "Php Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yayin_tarihi" => "01.01.2023",
        "yorum_sayisi" => 100,
        "begeni_sayisi" => 0,
        "onay" => true
    ),
    "Kurs_2" => array(
        "baslik" => "Python Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Python prrogramlama",
        "resim" => "2.jpg",
        "yayin_tarihi" => "03.03.2023",
        "yorum_sayisi" => 200,
        "begeni_sayisi" => 400,
        "onay" => false
    ),
    "Kurs_3" => array(
        "baslik" => "Node.js Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yayin_tarihi" => "05.05.2023",
        "yorum_sayisi" => 0,
        "begeni_sayisi" => 500,
        "onay" => true
    )
);

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

const title = "Popüler Kurslar";
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Php Doc</title>
</head>

<body>
    <div class="text-center display-6">
        <?php echo title; ?>
    </div>
    <p class="lead text-center">
        <?php 
            $onayli_kurs_sayisi = 0;

            foreach ($kurslar as $kurs) {
                if ($kurs["onay"] === true) {
                    $onayli_kurs_sayisi++;
                }
            }            
        ?>
        <?php echo count($categories).' kategoride '.$onayli_kurs_sayisi.' kurs listelendi' ?>
    </p>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php foreach($categories as $c){ ?>
                        <li class="list-group-item <?php echo ($c['active'] == true) ? "active" : "" ?>">
                            <a href="#" style="text-decoration:none;color:brown"><?php echo $c['cat_name']; ?></a>
                        </li>
                    <?php } ?>
                </ul>

            </div>
            <div class="col-9">
                <?php foreach ($kurslar as $kurs) { ?>
                    <!-- endif bir tane endif yeter -->
                <?php if($kurs['onay'] == true): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurs['resim']; ?>" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-8">
                                <a href=<?php echo url_duzenle($kurs['baslik']) ?>>
                                    <h5 class="card-title"><?php echo $kurs['baslik']; ?></h5>
                                </a>
                                <p class="card-text"><?php echo alt_baslik_duzen($kurs['alt_baslik']) ?></p>
                                <p class="card-text">Yayın Tarihi: <?php echo $kurs['yayin_tarihi']; ?></p>
                                <?php if($kurs['yorum_sayisi']): ?>
                                    <p class="card-text">Yorum Sayısı: <?php echo $kurs['yorum_sayisi']; ?></p>
                                <?php else: ?>
                                    <p class="card-text">Ilk yorumu sen yap</p>
                                <?php endif ?>
                                <?php if($kurs['begeni_sayisi']): ?>
                                    <p class="card-text">Beğeni Sayısı: <?php echo $kurs['begeni_sayisi']; ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>