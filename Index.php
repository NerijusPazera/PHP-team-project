<?php

$activity_types = ['rest','fight', 'loot'];

$map_slots = [
    [
        'type' => 'rest',
        'title' => 'Rest',
        'variants' => [
            [
                'subtitle' => 'Forest',
                'image' => 'assets/forest.jpg'
            ],
            [
                'subtitle' => 'Cave',
                'image' => 'assets/cave.jpg'
            ],
            [
                'subtitle' => 'Hell',
                'image' => 'assets/hell.jpg'
            ]
        ],
    ],
    [
        'type' => 'fight',
        'title' => 'Fight',
        'variants' => [
            [
                'subtitle' => 'Forest',
                'image' => 'assets/forest.jpg'
            ],
            [
                'subtitle' => 'Cave',
                'image' => 'assets/cave.jpg'
            ],
            [
                'subtitle' => 'Hell',
                'image' => 'assets/hell.jpg'
            ]
        ],
    ],
    [
        'type' => 'loot',
        'title' => 'Loot',
        'variants' => [
            [
                'subtitle' => 'Forest',
                'image' => 'assets/forest.jpg'
            ],
            [
                'subtitle' => 'Cave',
                'image' => 'assets/cave.jpg'
            ],
            [
                'subtitle' => 'Hell',
                'image' => 'assets/hell.jpg'
            ]
        ],
    ]

];

for ($c=0; $c<16; $c++) {
    $randomized_slot = $map_slots[rand(0,2)];
    $current_location = $randomized_slot['variants'][rand(0,2)];
    $randomized_slot[] = $current_location;
    $random_slots[] = $randomized_slot;
}

$slot_number = 1;
?>

<html>
    <head>
        <link rel="stylesheet" href="assets/css/navigation.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <title></title>
    </head>
    <body>
        <?php include 'navigation.php'?>
        <h1 class="title">MAP</h1>
        <section class="grid-container">
            <div class="map-grid">
                <?php foreach ($random_slots as $slot_key):?>
                    <div class="slot">
                        <img src="<?php print $slot_key[0]['image']; ?>">
                        <div class="slot-number"><?php print $slot_number; ?></div>
                        <?php $slot_number++; ?>
                        <div class="text-container">
                            <div class="location-desc"><?php print $slot_key[0]['subtitle']; ?></div>
                            <div class="activity-desc"><?php print $slot_key['title']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </body>
</html>
