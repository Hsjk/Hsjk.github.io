<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>----タイトル----</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<!-- ▼全体の囲み▼ -->
<div id="wrapper">
<!-- ▼ヘッダ▼ -->
<header>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalhead.php'); ?><!-- ▲ヘッダ▲ -->
<!-- ▼メニュー▼ -->
<a href="#" id="open"><span id="open-icon"></span></a>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalmenu.php'); ?>
<!-- ▲メニュー▲ -->

<!-- ▼メイン▼ -->
<div id="contents">

<h2>LINK</h2>

<dl>
<dt>MASTER</dt>
<dd>NAME</dd>

<dt>SITE NAME</dt>
<dd>SITE NAME</dd>

<dt>URL</dt>
<dd>http://</dd>

<dt>BANNER</dt>
<dd>
<img src="image/ba01.gif" alt="ba01.gif" width="200" height="40">
</dd>
</dl>

<h3>相互リンク</h3>
<a href="#"><img src="image/no200.gif" width="200" height="40" alt="image"></a>
<a href="#"><img src="image/ba01.gif" width="200" height="40" alt="image"></a>
<a href="#"><img src="image/ba01.gif" width="200" height="40" alt="image"></a>
<a href="#"><img src="image/ba01.gif" width="200" height="40" alt="image"></a><br>
<a href="#">リンク1</a>
<a href="#">リンク2</a>

<h3>片道リンク</h3>
<a href="#">リンク1</a>
<a href="#">リンク2</a>
<a href="#">リンク3</a>

<h3>素材・同盟</h3>
<a href="#"><img src="image/ba02.gif" width="88" height="31" alt="image"></a>
<a href="#"><img src="image/ba02.gif" width="88" height="31" alt="image"></a>
<a href="#"><img src="image/ba02.gif" width="88" height="31" alt="image"></a><br>
<a href="#"><img src="image/ba03.gif" width="32" height="32" alt="image"></a>
<a href="#"><img src="image/ba03.gif" width="32" height="32" alt="image"></a>
<a href="#"><img src="image/ba03.gif" width="32" height="32" alt="image"></a><br>
<a href="#">リンク1</a>
<a href="#">リンク2</a>
<a href="#">リンク3</a>

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
