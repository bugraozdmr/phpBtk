<!DOCTYPE html>
<html lang="tr">

<?php

$categories = array("Programlama","Siber Güvenlik","Veri Analizi");

$kurslar = array(
    "Kurs_1" => array(
        "baslik" => "Php Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yayin_tarihi" => "01.01.2023",
        "yorum_sayisi" => 100,
        "begeni_sayisi" => 300
    ),
    "Kurs_2" => array(
        "baslik" => "Python Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Python prrogramlama",
        "resim" => "2.jpg",
        "yayin_tarihi" => "03.03.2023",
        "yorum_sayisi" => 200,
        "begeni_sayisi" => 400
    ),
    "Kurs_3" => array(
        "baslik" => "Node.js Kursu",
        "alt_baslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yayin_tarihi" => "05.05.2023",
        "yorum_sayisi" => 300,
        "begeni_sayisi" => 500
    )
);

$yeni_kurs = array(
    "baslik" => "Siber Güvenlik Kursu",
    "alt_baslik" => "Sıfırdan ileri seviye Python ile hack uygulamarı yazma",
    "resim" => "4.jpg",
    "yayin_tarihi" => "05.12.2020",
    "yorum_sayisi" => 223,
    "begeni_sayisi" => 1123
);

array_push($kurslar,$yeni_kurs);


// atama foreach
foreach ($kurslar as $key => $value) {
    $kurslar[$key]["kurs_url"] = strtolower(str_replace([' ','.',','],['-','',''],$kurslar[$key]["baslik"]));
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
        <?php echo count($categories).' kategoride '.count($kurslar).' kurs listelendi' ?>
    </p>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <?php foreach($categories as $c){ ?>
                        <li class="list-group-item">
                            <a href="#" style="text-decoration:none"><?php echo $c; ?></a>
                        </li>
                    <?php } ?>
                </ul>

            </div>
            <div class="col-9">
                <?php foreach ($kurslar as $kurs) { ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurs['resim']; ?>" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-8">
                            <a href=<?php echo $kurs['kurs_url'] ?>>
                                <h5 class="card-title"><?php echo $kurs['baslik']; ?></h5>
                            </a>
                            <p class="card-text"><?php echo $kurs['alt_baslik'][0].strtolower(substr($kurs['alt_baslik'],1,30)).'...'; ?></p>
                            <p class="card-text">Yayın Tarihi: <?php echo $kurs['yayin_tarihi']; ?></p>
                            <p class="card-text">Yorum Sayısı: <?php echo $kurs['yorum_sayisi']; ?></p>
                            <p class="card-text">Beğeni Sayısı: <?php echo $kurs['begeni_sayisi']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>