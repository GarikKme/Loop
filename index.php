<?php


$menu = [
    [
      'title'=>'home',
      'link'=>'/home',
    ],
    [
        'title'=>'services',
        'link'=>'/services',
            'children' => [
                [
                  'title' => 'HTML5',
                  'link' => '/HTML5'
                ],
                [
                    'title' => 'JS',
                    'link' => '/JS'
                ],
                [
                    'title' => 'PHP',
                    'link' => '/PHP'
                ],

        ]
    ],
    [
        'title'=>'about',
        'link'=>'/about',
        'children' => [
            [
                'title' => 'Politics',
                'link' => '/Politics'
            ],
            [
                'title' => 'about us',
                'link' => '/about'
            ]
        ],
    ],
    [
        'title'=>'contacts',
        'link'=>'/contacts',
    ]
];

//showing menu with foreach loop

function menuNavFor($menu) {
    echo '<ul class="navMenu">';
    for ($i = 0; $i < count($menu); $i++) {
        if(array_key_exists('children', $menu[$i])){
            echo '<li class="navMenu__item"><a href="'. $menu[$i]['link'] .'">' . $menu[$i]['title']. '</a>';
            echo '<ul class="submenu">';
            for ($j = 0; $j < count($menu[$i]['children']); $j++) {
                echo  '<li><a href="' . $menu[$i]['children'][$j]['link'] .'">  ' . $menu[$i]['children'][$j]['title'] . '</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        } else{
            echo '<li class="navMenu__item"><a href="'. $menu[$i]['link'] .'">' . $menu[$i]['title'] . '</a></li>';
        }
    }
    echo '</ul>';
}

$foreach = '<ul class="navMenu">';
 function menuNavForeach()
 {
     global $menu;
    echo '<ul class="navMenu">';
    foreach ($menu as $item)
    {
        if(array_key_exists('children', $item)){
            echo '<li  class="navMenu__item"><a href="' . $item['link'] . '">' . $item['title'] . '</a><ul  class="submenu">';
                foreach ($item['children'] as $inner_item)
                {
                    echo '<li><a href="' . $inner_item['link'] .'">' . $inner_item['title'] . '</a></li>';
                }

            echo '</ul></li>';
        }else {
            echo '<li  class="navMenu__item"><a href="' . $item['link'] . '">' . $item['title'] . '</a></li>';
        }
    }
     echo '</ul>';
 }

?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Loops</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header class="header">
    <div class="container">
      <nav>
        <?= menuNavFor($menu);  ?>
      </nav>
      <br><br>
      <div class="foreach">
        <?= menuNavForeach(); ?>
      </div>
    </div>
  </header>
</body>

</html>