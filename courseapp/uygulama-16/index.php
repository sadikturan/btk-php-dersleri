<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php 
     $kurslar = getCourses(true,true);
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

    <div class="row">
        <div class="col-3">
            <?php include "partials/_menu.php" ?>
        </div>
        <div class="col-9">
            <?php include "partials/_title.php" ?>

            <?php if(mysqli_num_rows($kurslar) > 0): ?>
                <?php while($kurs = mysqli_fetch_assoc($kurslar)): ?>
                    <?php if ($kurs["onay"]): ?>

                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="course-details.php?id=<?php echo $kurs["id"];?>">
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
                <?php endwhile ?>
            <?php else: ?>
                <div class="alert alert-warning">
                    Kurs bulunamadı.
                </div>
            <?php endif ?>
            
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>
