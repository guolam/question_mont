<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>

</head>

<body>
    <form method="POST" action="data_create.php" name="text">
        <fieldset>
            <legend>⛰あなたは山での生存率テスト⛰</legend>

            <div id=q_p1>
                <div class="yama">
                    <p>今日行く山を決めてください</p>
                    <input type="radio" name="Q1" value=1 id="Q1A">
                    <label for="Q1A" class="label" required>宝満山</label>
                    <input type="radio" name="Q1" value=2 id="Q1B">
                    <label for="Q1B" class="label">宝満山</label>
                    <input type="radio" name="Q1" value=3 id="Q1C">
                    <label for="Q1C" class="label">宝満山</label>
                    <input type="radio" name="Q1" value=4 id="Q1D">
                    <label for="Q1D" class="label">宝満山</label>
                    <p></p>
                </div>

                <div class="yama">
                    <p>出発前に、どのアプリやサービスから山情報を確認しますか？</p>

                    <input type="radio" name="Q2" value=2 id="Q2A">
                    <label for="Q2A" class="label" required>YAMAP!!</label>
                    <input type="radio" name="Q2" value=4 id="Q2B">
                    <label for="Q2B" class="label">WEATHER NEWS</label>
                    <input type="radio" name="Q2" value=1 id="Q2C">
                    <label for="Q2C" class="label">ブログ情報</label>
                    <input type="radio" name="Q2" value=10 id="Q2D">
                    <label for="Q2D" class="label">以上全部</label>
                    <p></p>
                </div>

                <div class="yama">
                    <p>今日は炎天下、35℃、あなたはどれくらいのお水を持って行きますか？</p>
                    <input type="radio" name="Q3" value=1 id="Q3A">
                    <label for="Q3A" class="label" required>500m</label>
                    <input type="radio" name="Q3" value=4 id="Q3B">
                    <label for="Q3B" class="label">1L</label>
                    <input type="radio" name="Q3" value=9 id="Q3C">
                    <label for="Q3C" class="label">1.5L</label>
                    <input type="radio" name="Q3" value=6 id="Q3D">
                    <label for="Q3D" class="label">2L</label>
                    <p></p>
                </div>

                <div class="yama">
                    <p>リュックにスペースが足りません。あなたはどれを持って行きますか？</p>
                    <input type="radio" name="Q4" value=7 id="Q4A">
                    <label for="Q4A" class="label" required>水500ml</label>
                    <input type="radio" name="Q4" value=2 id="Q4B">
                    <label for="Q4B" class="label">カロリーメイト</label>
                    <input type="radio" name="Q4" value=10 id="Q4C">
                    <label for="Q4C" class="label">OS-1</label>
                    <input type="radio" name="Q4" value=5 id="Q4D">
                    <label for="Q4D" class="label">水2L</label>
                    <p></p>
                </div>
            </div>
            <div id=q_p2 style="display: none;">
                <div class="yama">
                    <p>あなたはこの看板を見たらどう行動しますか？</p>
                    <input type="radio" name="Q5" value=1 id="Q5A">
                    <label for="Q5A" class="label" required>前進する</label>
                    <input type="radio" name="Q5" value=2 id="Q5B">
                    <label for="Q5B" class="label">左へ行く</label>
                    <input type="radio" name="Q5" value=3 id="Q5C">
                    <label for="Q5C" class="label">右へ行く</label>
                    <input type="radio" name="Q5" value=9 id="Q5D">
                    <label for="Q5D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <!-- <div class="yama">
                    <p>そして、リボンが見えました、あなたはどうしますか？</p>
                    <input type="radio" name="Q6" value="8" id="Q6A">
                    <label for="Q6A" class="label" required>前進する</label>
                    <input type="radio" name="Q6" value="2" id="Q6B">
                    <label for="Q6B" class="label">左へ行く</label>
                    <input type="radio" name="Q6" value="2" id="Q6C">
                    <label for="Q6C" class="label">右へ行く</label>
                    <input type="radio" name="Q6" value="6" id="Q6D">
                    <label for="Q6D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <div class="yama">
                    <p>天気が悪くなってきて、遠くから雨雲が見えてます、あなたはどうしますか？</p>
                    <input type="radio" name="Q7" value="3" id="Q7A">
                    <label for="Q7A" class="label" required>前進する</label>
                    <input type="radio" name="Q7" value="2" id="Q7B">
                    <label for="Q7B" class="label">左へ行く</label>
                    <input type="radio" name="Q7" value="1" id="Q7C">
                    <label for="Q7C" class="label">右へ行く</label>
                    <input type="radio" name="Q7" value="9" id="Q7D">
                    <label for="Q7D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <div class="yama">
                    <p>雨が降り出しました、あなたはどうしますか？</p>
                    <input type="radio" name="Q8" value="5" id="Q8A">
                    <label for="Q8A" class="label" required>恐れずに前進</label>
                    <input type="radio" name="Q8" value="3" id="Q8B">
                    <label for="Q8B" class="label">左へ行く</label>
                    <input type="radio" name="Q8" value="7" id="Q8C">
                    <label for="Q8C" class="label">木の下に避難する</label>
                    <input type="radio" name="Q8" value="9" id="Q8D">
                    <label for="Q8D" class="label">登山口に戻る</label>
                    <p></p>
                </div> -->
            </div>
            <!-- <div class="yama">
                <p></p>
                <input type="radio" name="Q1" value=1 id="Q8A">
                <label for="Q8A" class="label">恐れずに前進</label>
                <input type="radio" name="Q1" value=1 id="Q8B">
                <label for="Q8B" class="label">左へ行く</label>
                <input type="radio" name="Q1" value=1 id="Q8C">
                <label for="Q8C" class="label">木の下に避難する</label>
                <input type="radio" name="Q1" value=1 id="Q8D">
                <label for="Q8D" class="label">登山口に戻る</label>
                <p></p>
            </div> -->



            <a class="next_btn" href="#q_p2">次へ</a>
        </fieldset>
        <input type="submit" value="送信">
        <!-- <a class="send" id="send" href="data_read.php">送信</button> -->

        <a href="result.php">一覧画面</a>
    </form>
    <form method="POST" name="text">

        <!-- 結果を別のフォームに飛ばして、表示させる(JSで) -->
        <!-- <a class="result" id="result" href="result.php">記録確認</button> -->
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>