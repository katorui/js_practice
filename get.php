<?php

// $data = [
//     'id' => 1,
//     'name' => $_GET['name'],
//     'age' => $_GET['age'],
//     'img' => 'img/boy_sad.png'
// ];

// $json = json_encode(
//     $data,
//     JSON_UNESCAPED_SLASHES
//     | JSON_UNESCAPED_UNICODE
// );
// // ヘッダーにJSONで返すことを伝える
// header("Content-Type: application/json");
// echo $json;

$images = [
    [ 'id' => 1, 'name' => "画像1", 'src' => 'img/pien3.jpg'],
    [ 'id' => 2, 'name' => "画像2", 'src' => 'img/boy_sad.png'],
    [ 'id' => 3, 'name' => "画像3", 'src' => 'img/megane.png'],
    [ 'id' => 4, 'name' => "画像4", 'src' => 'img/pien_woman.png'],
];

$json = json_encode(
    $images,
    JSON_UNESCAPED_SLASHES
    | JSON_UNESCAPED_UNICODE
);
// ヘッダーにJSONで返すことを伝える
header("Content-Type: application/json");
echo $json;
