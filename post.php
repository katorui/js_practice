<?php

$data = [
    'img' => $_POST['img'],
    'name' => $_POST['name']
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
