<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>てつくずおきば。</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<!-- ▼全体の囲み▼ -->
<div id="wrapper">
<!-- ▼ヘッダ▼ -->
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalhead.php'); ?>
<!-- ▲ヘッダ▲ -->
<!-- ▼メニュー▼ -->
<a href="#" id="open"><span id="open-icon"></span></a>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalmenu.php'); ?>
<!-- ▲メニュー▲ -->

<!-- ▼メイン▼ -->
<div id="contents">

<h2>はじめに</h2>

作ったものをぞろぞろ乗っけてます～。絵も曲もプログラムも～。<br>
完全自己満の落書きのようなサイトですが、無断で物を持ってくのはやめてください！

<h2>twitter</h2>
<a class="twitter-timeline" href="https://twitter.com/shirohako007" data-widget-id="692590899872661504" data-chrome="noheader nofooter noborders transparent" width="580"　font-size:"10.5pt">410fのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

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