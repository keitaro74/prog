<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>


<header>
  <nav>
    <div><a href="check.php">データ一覧</a></div>
  </nav>
</header>


<!-- ユーザーID送信 -->
<form method="post" action="datainsert.php">
  <div>
   <fieldset>
    <legend>新規登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>パスワード：<input type="text" name="pass"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

    
</body>
</html>