<?php
session_start();
$is_auth = isset($_SESSION["name"]);

if ($is_auth == 1) {
    $user_name = $_SESSION["name"];
    $user_id = $_SESSION["id"];
} else {
    $user_name = '';
    $user_id = '';
}


/*$categories = [
    "boards" => "Доски и лыжи",
    "attachment" => "Крепления",
    "boots" => "Ботинки",
    "clothing" => "Одежда",
    "tools" => "Инструменты",
    "other" => "Разное"
  ];

 $goods = [
    [
       "title" => "2014 Rossignol District Snowboard",
       "category" => $categories["boards"],
       "price" => 10999,
       "image" => "img/lot-1.jpg",
       "date" => "2023-12-27"
    ],
    [
       "title" => "DC Ply Mens 2016/2017 Snowboard",
       "category" => $categories["boards"],
       "price" => 159999,
       "image" => "img/lot-2.jpg",
       "date" => "2023-12-28"
    ],
    [
       "title" => "Крепления Union Contact Pro 2015 года размер L/XL",
       "category" => $categories["attachment"],
       "price" => 8000,
       "image" => "img/lot-3.jpg",
       "date" => "2023-12-29"
    ],
    [
       "title" => "Ботинки для сноуборда DC Mutiny Charocal",
       "category" => $categories["boots"],
       "price" => 	10999,
       "image" => "img/lot-4.jpg",
       "date" => "2023-12-30"
    ],
    [
       "title" => "Куртка для сноуборда DC Mutiny Charocal",
       "category" => $categories["clothing"],
       "price" => 7500,
       "image" => "img/lot-5.jpg",
       "date" => "2023-12-31"
    ],
    [
       "title" => "Маска Oakley Canopy",
       "category" => $categories["other"],
       "price" => 5400,
       "image" => "img/lot-6.jpg",
       "date" => "2024-01-01"
    ],
 ];
 */