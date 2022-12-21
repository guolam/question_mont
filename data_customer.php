<?php

$name = $_POST["name"];
$email = $_POST["email"];

// var_dump($todo);
// exit();

// "\n"は改行
$write_data = "{$name} {$email}\n";
// var_dump("$write_data");
// exit();
//ファイルを開けて、記入する("a"=なければ作るぞ！)
$file = fopen("data/customer_data.csv", "a");
// $file = fopen("data/data.csv", "a");

//他の人に書けないように、ロックをかける
flock($file, LOCK_EX);

//ファイルに記入する
fwrite($file, $write_data);

//書いたら、ファイルをunlockする
flock($file, LOCK_UN);

//ファイルを閉じる。
fclose($file);

//前のページに戻る
header("location:result.php");
exit();
