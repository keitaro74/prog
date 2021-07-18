<?php
// step1
session_start();

//ポイント1　postでデータをあらかじめ受け取る
$lid = $_POST["email"];
$lpw = $_POST["pass"];


//1.  DB接続します
try {
    $pdo = new PDO('mysql:dbname=fennec;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//2. データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM userid WHERE email=:email AND pass=:pass");
$stmt->bindValue(':email', $_POST["email"]); //php変数に置き換えてもOK
$stmt->bindValue(':pass', $_POST["pass"]);
$res = $stmt->execute();


//3. SQL実行時にエラーがある場合
if ($res==false) {
    // queryError($stmt);
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}


//4. 抽出データ数を取得
$val = $stmt->fetch(); //1レコードだけ取得する方法


//5. 該当レコードがあればSESSIONに値を代入 ※空っぽじゃなければ（認証がオッケーだったときに新しくセッションIDを作る）
if ($val["id"] != "") {
    $_SESSION["chk_ssid"]  = session_id();//ここでログインしているか判断するsessionID
    $_SESSION["name"]      = $val['name'];//データベースに格納されたnameっていう引き出しにあるものを変数につっこむ
    header("Location:select.php");
} else {
    //logout処理を経由して全画面へ
    header("Location:login.php");
}
exit();

?>