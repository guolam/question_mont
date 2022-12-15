<?php

//dataをまとめ用の空文字変数

$str = "";
$array = [];



// 読み込み専用
// $file = fopen("data/todo.txt", "r");
$csv = fopen("data/questionnaire_result.csv", "r");
// var_dump($csv);
// exit();

//書き込まれないようにロック
//ファイルを開けてないと、データを取ることができない
flock($csv, LOCK_EX);



//fgetで$lineを格納




if ($csv) {
  while ($line = fgets($csv)) {

    //.= は　+=と同じ意味です。
    // ここの文字列を表示させる
    $str .= "<tr><td>{$line}</td></tr>";

    // 配列も作れます。
    $array[] = [
      "Q1" => explode(" ", $line)[0],
      "Q2" => explode(" ", $line)[1],
      "Q3" => explode(" ", $line)[2],
      "Q4" => explode(" ", $line)[3],
      "Q5" => explode(" ", $line)[4],
      "Q6" => explode(" ", $line)[5],
      "Q7" => explode(" ", $line)[6],
      "Q8" => str_replace("\n", "", explode(" ", $line)[7]),
    ];

    // var_dump($array[0]);
    // echo "sum(sum) = " . array_sum($sum) . "\n";

  }
}



flock($csv, LOCK_UN);
fclose($csv);


// var_dump($array);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>診断結果</title>
</head>

<body>
  <fieldset>
    <legend>診断結果</legend>
    <a href="index1.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>履歴</th>
        </tr>
      </thead>
      <tbody>
        <!-- 表示させる -->
        <?= $str ?>
        <?= $array ?>

        <div class="createHtml"></div>

      </tbody>
    </table>
  </fieldset>
  <script>
    const createhtml = [],
      const datas = <?= json_encode($array) ?>;
    console.log(datas);
    createhtml.push(datas);
    const createHtml = `<div class="createHtml">Q1+Q2+Q3</p></div></div>`
    console.log(createHtml);
  </script>
  <!-- js Chart -->
  <div>
    <canvas class="radar" id="myChart"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8'],
        datasets: [{
          label: '山での生存率',
          data: [4, 5, 4, 5, 6, 7, 8, 3, 2],
          borderWidth: 3,
        }]
      },
      options: {
        scales: {
          r: {
            angleLines: {
              display: false
            },
            suggestedMin: 0,
            suggestedMax: 10
          }
        }
      }
    });
  </script>




</body>

</html>