<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>イラスト</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<!-- ▼全体の囲み▼ -->
<div id="wrapper">

<!-- ▼ヘッダ▼ -->
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalhead.php'); ?>

<!-- ▼メニュー▼ -->
<a href="#" id="open"><span id="open-icon"></span></a>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalmenu.php'); ?>
<!-- ▲メニュー▲ -->

<!-- ▼メイン▼ -->
<div id="contents">

上に行くほど新しくなったりならなかったり！
<h2>ヘッダー画像01（07/11～）</h2>
初代ヘッダー画像。あまりにもヘッダーがさみしかったのでポチポチ描いちゃいました。<BR>
<p class="resizeimage">
   <img src="./image/syodai01.png" alt="head20170711">
</p>
<style type="text/css">
p.resizeimage img { width: 100%; }
</style></BR>
</div><!-- ▲メイン▲ -->

<!-- ▼フッタ▼ -->
<footer>
<div class="pagetop"><a href="#">▲</a></div>
<div class="sub"><a href="http://foollovers.com" target="_blank">designed</a></div>
</footer><!-- ▲フッタ▲ -->

</div><!-- ▲全体の囲み▲ -->

<!-- jquery/menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/jquery.toggle.js"></script>
<script src="js/jquery.scroll.js"></script>
</body>
<?php include_once("analyticstracking.php") ?>
</html>
