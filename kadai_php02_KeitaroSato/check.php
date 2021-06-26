<?php

try {
$pdo = new PDO('mysql:dbname=fennec;charset=utf8;host=localhost','root','');

} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


$stmt = $pdo->prepare("SELECT * FROM userid");
$status = $stmt->execute();


$view="";
if($status==false){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= $result["id"].":".$result["pass"];//ここで表示する内容を決める
    $view .= "</p>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ID表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="registration.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>



<div>
    <div class="container jumbotron"><?=$view?></div>
</div>


</body>
</html>
