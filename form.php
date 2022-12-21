<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>

<body>
    <form method="POST" action="data_customer.php" name="text">

        <fieldset>
            <legend>答えを見る前に、メルマガのご登録お願いします!!</legend>
            <br><br>
            <div>
                　　　　*お名前: <input type="text" name="name" required>
            </div>
            <br>
            <div>
                *メールアドレス: <input type="email" name="email" required>
            </div>
            <br><br>
            *必須項目です。
            <div>
                <br><br>
                <input type="submit" class="button" href="result.php" value="送信">
                <br><br>
                不定期のメルマガを配信いたします。
            </div>


        </fieldset>
</body>

</html>