<?php

        $items = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear'=> 1968,
                'purchaseUrl'=> 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear'=> 2021,
                'purchaseUrl'=> 'http://example.com'
            ],
            [
                'name' => 'The Martisan',
                'author' => 'Andy Weir',
                'releaseYear'=> 2011,
                'purchaseUrl'=> 'http://example.com'
            ]
        ];

        // $filter = function ($items, $fn) {
        //     $filteredItems = [];
        //     foreach ($items as $item) {
        //         if ($fn($item)) {
        //             $filteredItems[] = $item;
        //         }
        //     }
        //     return $filteredItems;
        // };


    $filteredItems = array_filter($items, function ($item){
        return $item['releaseYear']>= 2000;
    });
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
<ul>
      <?php foreach ($filteredItems as $item) : ?>
        <li>
            <a href="">
                <?= $item['name']; ?> (<?= $item['releaseYear'] ?>) - By <?= $item['author'] ?>
            </a>
        </li>
      <?php endforeach;  ?>
 </ul>
</body>
</html>