<?php


$menu = [
    "home" => [],
    "services" => ['first', 'second', 'third'],
    "about" => [],
    "gallery" => ['image1', 'image2', 'image3'],
    "contacts" => [],
];

//showing menu with foreach loop

echo '<ul>';
foreach ($menu as $item => $value) {
    echo '<li><a href="#">' . $item;
    if(!empty($value)){
        echo '<ul>';
        foreach ($value as  $inner_value) {
            echo  '<li><a href="#"> . ' . $inner_value . '</a></li>';
        }
        echo '</ul>';
    }
    echo '</a></li>';
}
echo '</ul>';


