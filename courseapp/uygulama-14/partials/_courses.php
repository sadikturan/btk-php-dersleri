<?php foreach(getDb()["kurslar"] as $key => $kurs): ?>

<?php if ($kurs["onay"]): ?>

    <div class="card mb-3">
        <div class="row">
            <div class="col-4">
                <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?php echo urlDuzenle($kurs["baslik"]); ?>">
                            <?php echo $kurs["baslik"]; ?>
                        </a>
                    </h5>
                    <p class="card-text">
                        <?php echo kisaAciklama($kurs["altBaslik"]) ?>
                    </p>
                    <p>
                        <?php if ($kurs["begeniSayisi"] > 0): ?>
                            <span class="badge rounded-pill text-bg-primary">
                            <?php echo $kurs["begeniSayisi"]; ?> Beğeni
                            </span>
                        <?php endif ?>

                        <?php if ($kurs["yorumSayisi"] > 0): ?>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum: <?php echo $kurs["yorumSayisi"]; ?>
                            </span>
                        <?php else: ?>
                            <span class="badge rounded-pill text-bg-warning">
                                İlk yorumu sen yap
                            </span>
                        <?php endif ?>

                    </p>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>

<?php endforeach ?>