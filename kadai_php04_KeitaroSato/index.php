<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <a href="select.php">データ一覧</a>
            <a class="navbar-brand" href="login.php">ログイン</a>
        </div>
    </header>

    <main>
        <fieldset>
            <form method="post" action="insert.php">
                <legend>新規登録</legend><br>
                <label>名前：<input type="text" name="name"></label><br><br>
                <label>メールアドレス：<input type="text" name="email"></label><br><br>
                <label>パスワード：<input type="text" name="pass"></label><br><br>
                <input type="submit" value="登録">
            </form>
        </fieldset>
    </main>



    
</body>
</html>