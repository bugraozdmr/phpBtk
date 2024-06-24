<?php
    const title = "Popüler Kurslar";

    $categories = array(
        array("cat_name" => "Programlama",'active'=>false),
        array("cat_name" => "Siber Güvenlik",'active'=>false),
        array("cat_name" => "Veri Analizi",'active'=>true)
    );
    

    $cities = array(
        '58' => 'Sivas',
        '6' => 'Adana',
        '34' => 'Istanbul',
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
    

?>