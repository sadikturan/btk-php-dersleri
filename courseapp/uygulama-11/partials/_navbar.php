<?php

    if(!empty($_GET['q'])) {
        $keyword = $_GET['q'];

        $kurslar = array_filter($kurslar, function($kurs) use ($keyword) {
            return stristr($kurs['baslik'], $keyword) or (stristr($kurs['altBaslik'], $keyword));
        });
    }

?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">CourseApp</a>
       
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="create.php" class="nav-link">Kurs Ekle</a>
            </li>
        </ul>

        <ul class="navbar-nav me-2">
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
        </ul>

        <form action="index.php" class="d-flex" method="get">
            <input type="text" name="q" class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-warning">Ara</button>
        </form>
    </div>
</nav>