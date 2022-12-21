<?php

$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];


$write_data = "{$Q1} \n{$Q2} \n{$Q3} \n{$Q4} \n{$Q5} \n{$Q6} \n{$Q7} \n{$Q8} \n ";


$csv = fopen("data/questionnaire_result.csv", "w");


//他の人に書けないように、ロックをかける
flock($csv, LOCK_EX);

//ファイルに記入する
fwrite($csv, $write_data);



//書いたら、ファイルをunlockする
flock($csv, LOCK_UN);

//ファイルを閉じる。
fclose($csv);

//前のページに戻る
header("location:form.php");
exit();
