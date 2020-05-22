<?php
function h ($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$flag = 0;
$name = $_POST[name];
$mail = $_POST[mail];

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $name.",".$mail."\r\n");
fclose($file);

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?=h($name) ?>
EMAIL：<?=h($mail) ?>
<?php if($flag == 0){
     ?>
<button>登録</button>
<?php }
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>