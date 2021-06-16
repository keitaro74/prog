<?php
    $rock = [];
    $paper = [];
    $scissors = [];

    $enemies = "";
    $a = $_POST["enemies"];
    $enemies = (int)$a;
    echo $enemies;

    if(isset($_POST['enemies'])){
        for ($i = 0; $i < $enemies; $i++){
            //echo rand(1, 3);
            $comRPS = rand(1, 3);
            if ($comRPS == 1){
                $rock[] = $comRPS;
            }elseif ($comRPS == 2){
                $paper[] = $comRPS;
            }elseif ($comRPS == 3){
                $scissors[] = $comRPS;
            }
        }
    }

    $rockNum = count($rock);
    echo $rockNum;
    $paperNum = count($paper);
    echo $paperNum;
    $scissorsNum = count($scissors);
    echo $scissorsNum;  
    //ここまでは数値がきている 

    if(isset($_POST["playerRock"])){
        $playerHand = 1;
    }elseif(isset($_POST["playerPaper"])){
        $playerHand = 2;
    }elseif(isset($_POST["playerScissors"])){
        $playerHand = 3;
    }



    if(isset($_POST["playerRock"])){
        if($rockNum !== 0 && $paperNum !== 0 && $scissorsNum !== 0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "あいこで...";
        }elseif($paperNum==0 && $scissorsNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あいこで...";
        }elseif($paperNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの勝ち！";
        }elseif($scissorsNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの負け...残念！";
        }
    }
    
    elseif(isset($_POST["playerPaper"])){
        if($rockNum!==0 && $paperNum!==0 && $scissorsNum!==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あいこで...";
        }elseif($rockNum==0 && $scissorsNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あいこで...";
        }elseif($scissorsNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの勝ち！";
        }elseif($rockNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの負け...残念！";
        } 
    }
    
    elseif(isset($_POST["playerScissors"])){
        if($rockNum!==0 && $paperNum!==0 && $scissorsNum!==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あいこで...";
        }elseif($rockNum==0 && $paperNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あいこで...";
        }elseif($rockNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの勝ち！";
        }elseif($paperNum==0){
            echo "グー：",$rockNum,"人";
            echo "チョキ：",$scissorsNum,"人";
            echo "パー：",$paperNum,"人";
            echo "//あなたの負け...残念！";
        } 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ジャンケン画面</title>
</head>
<body>
    <p>出す手を決めてください</p>
    <p>最初はグー、ジャンケン...</p>
    <form action="janken.php" method="POST">
        <button type="submit" name="playerRock">グー</button>
        <button type="submit" name="playerScissors">チョキ</button>
        <button type="submit" name="playerPaper">パー</button>
    </form>  
    
</body>
</html>