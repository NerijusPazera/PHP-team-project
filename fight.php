<?php

$title = 'Battlefield';
$h1 = 'Karas baigėsi, paskelbta demobilizacija !';
$photo_1 = 'https://www.topbestpics.com/wp-content/uploads/2018/01/funny-army-pictures-1.jpg';
$photo_2 = 'https://i.insider.com/5c98e906ee52ef4db2532a54?width=1100&format=jpeg&auto=webp';
$gif = 'https://media2.giphy.com/media/wFe2wOotTFclO/giphy.gif';

?>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/fight.css">
    <title><?php print $title; ?></title>
</head>
    <body>
        <?php include 'navigation.php'; ?>
        <main>
            <h1><?php print $h1; ?></h1>
            <div class="img-container">
                <img class="photo-1" src="<?php print $photo_1; ?>">
                <img class="photo-2" src="<?php print $photo_2; ?>">
            </div>
                <img class="gif" src="<?php print $gif; ?>">
        </main>
    </body>
</html>

