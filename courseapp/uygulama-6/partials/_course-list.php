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