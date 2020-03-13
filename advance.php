<?php

$h1 = 'Advance';
$step = rand(-3,3);

if($step < 0) {
        $class = 'backward';
        $h2 = "Move $step steps backwards";
}
elseif ($step == 0) {
    $class ='niekur';
    $h2 ="Don't move";
}

else {
        $class = 'forward';
        $h2 ="Move $step steps forward";
};
?>

<html>
    <head>
        <link rel="stylesheet" href="assets/css/advance.css">
    </head>
    <body>
        <?php include 'navigation.php'?>
        <main>
            <h1><?php print $h1 ;?></h1>
            <h2><?php print $h2 ;?></h2>
            <?php if($step == 0) :?>
                <div class ="<?php print $class ;?>"></div>
            <?php endif ;?>
            <div class ='cards'>
                <?php for($y = 0; $y > $step; $step++) :?>
                    <div class ="<?php print $class ;?>"></div>
                <?php endfor?>
                <?php for($y = 0; $y < $step; $step--) :?>
                     <div class ="<?php print $class ;?>"></div>
                <?php endfor ;?>
            </div>
        </main>
    </body>
</html>
