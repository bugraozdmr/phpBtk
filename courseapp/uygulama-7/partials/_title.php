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