<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$playerHandに代入してください
(3) コンピューターの手は$pcHandに代入してください
**/

// ここから処理を記述

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo">じゃんけんゲームdemo</div>
    </header>
    <main>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <p class="result-word"><?= $result ?>！</p>

            あなた：<?= $playerHand ?><br>
            コンピューター：<?= $pcHand ?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </main>
    <footer>
        <small>&copy;じゃんけんゲームdemo</small>
    </footer>
</div>
</body>
</html>


<?php
$hands = ['グー','チョキ','パー'];

if(isset($_POST['playerHand'])){
    $paylerHand = $_POST['playerHand'];

    $key = array_rand($hands);
    $pcHand = $hands[$key];

    if($playerHand == $pcHand){
        $result = 'あいこ';
    } elseif($playerHand == 'グー' && $pcHand == 'チョキ'){
        $result = '勝ち';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー'){
        $result = '勝ち';
    } elseif ($playerHand == 'パー' && $pcHand =='グー'){
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
?>
