<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title.' | '; ?>abc.com</title>
</head>
<body>
    
    <header>
        <?php include $menu ?>
    </header>
    <main>
        <h1>Sayfa Başlığı</h1>
        <p>
            <?php include $content ?>
        </p>
    </main>
    <footer>
        footer
    </footer>

</body>
</html>