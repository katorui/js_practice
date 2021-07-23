<?php

$data = [
    'id' => 1,
    'name' => $_GET['name'],
    'age' => $_GET['age'],
    'img' => 'img/boy_sad.png'
];
// 宿題2 ブラウザに表示
$json = json_encode(
    $data,
    JSON_UNESCAPED_SLASHES
    | JSON_UNESCAPED_UNICODE
);
// ヘッダーにJSONで返すことを伝える
header("Content-Type: application/json");
echo $json;

// $user = '{
//             "id" : 1,
//             "name" : "ペティス",
//             "age" : 26
//         }';

// echo $user;
