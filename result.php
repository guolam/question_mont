<?php

//dataをまとめ用の空配列を準備

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
    // 配列に、ある数字を全て入れる
    $array[] .= $line;
  }
}



flock($csv, LOCK_UN);
fclose($csv);

// 実行したら、画面に出てくる。
// var_dump($array);
?>

<!-------------------- html-------------------->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>診断結果</title>
</head>

<body>
  <fieldset width="900">
    <legend>診断結果</legend>

    <table>
      <thead>
        <tr>
          <th id="score"></th>
        </tr>
        <tr>
          <th id="life_text"></th>
        </tr>
      </thead>
      <tbody>
        <!-- 表示させる -->
        <!-- ?= $str ? -->

      </tbody>
    </table>
  </fieldset>


  <!-- js Chart -->
  <div class="canvas-container">
    <canvas class="radar" id="myChart"></canvas>
  </div>

  <div class="botton">
    <a class="arrow_animation_button" href="index1.php#q_p1">もう一回診断する</a>
  </div>
  <!-- <a href="index1.php#q_p1" class="home botton">
    <p>もう一回診断する</p>
  </a> -->


  <!---------------- javascript ---------------->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const data = <?= json_encode($array) ?>;


    //yamaの配列で、jasonから取ってきた文字列のデータを数字化する
    const yama = [
      Number(data[0]),
      Number(data[1]),
      Number(data[2]),
      Number(data[3]),
      Number(data[4]),
      Number(data[5]),
      Number(data[6]),
      Number(data[7])
    ];

    //点数計算
    const count_number = yama[0] + yama[1] + yama[2] + yama[3] + yama[4] + yama[5] + yama[6] + yama[7];
    console.log(count_number);

    function cal_num(count_number) {
      return Math.floor(count_number / 8 * 10);
    };



    //割り算  - 選択項目に対する％計算
    console.log(cal_num(count_number));
    let result_num = [];
    result_num.push(cal_num(count_number));

    console.log(result_num);

    const html_number = [];

    html_number.push(`
    <p>あなたの生存率は：${result_num}%</p>`)

    console.log(html_number);
    $("#score").html(html_number);


    // 点数によって、分類
    function mark(result_num) {

      if (result_num < 20)
        return "命の保証がない";
      else if (result_num >= 20 && result_num < 60)
        return "ちゃんと考えてから行動しましょう";
      else if (result_num >= 60 && result_num < 80)
        return "油断したらすぐにも命の危機だぞ！";
      else
        return "山の達人だ!! 危険と思ったら、すぐ帰るのが素晴らしい!";
    };

    console.log(mark(result_num))

    let life = [];

    life.push(`
    <p>アドバイス：${(mark(result_num))}</p>`)

    console.log(life);
    $("#life_text").html(life)



    // //結果を出力する関数
    $('.end').on('click', function() {
      if (countA > countB) {
        $('#answer_01').css("display", ""); //回答1
      } else {
        if (countB > countC) {
          $('#answer_02').css("display", ""); //回答2
        } else {
          $('#answer_03').css("display", ""); //回答3
        }
      }
    });



    //radar chartの図面 - chart.jsより作成

    $(function() {
      var container = $('.canvas-container');
      var chart = $('#chart');
      ctx.attr('width', container.width());
      ctx.attr('height', 300);
    });

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8'],
        datasets: [{
          label: '山での生存率',
          data: [yama[0], yama[1], yama[2], yama[3], yama[4], yama[5], yama[6], yama[7]],
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