<?php
require __DIR__ . '/database/lista.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
    </header>

    <main id="site_main">

        <div class="container">
            <?php foreach ($lista as $value) {
                # code... 
                //var_dump($value['title'])?>
            <div class="song">
                <img src="<?= $value['poster']; ?>" alt="">
                <div class="box_text">
                    <h4 class="title"><?= $value['title']; ?></h4>
                    <p class="text"><?= $value['author']; ?></p>
                    <p class="text"><?= $value['year']; ?></p>
                </div>
            </div>
            <?php
            }?>

        </div>
        
    </main>
    
</body>
</html>