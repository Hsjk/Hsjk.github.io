<!DOCTYPE html>

<?php
//var_dump($_POST);
//最初に変数を定義しておかないとエラーになる
$err_msg1 = "";
$err_msg2 = "";
$message ="";
$name = ( isset( $_POST["name"] ) === true ) ?$_POST["name"]: "";
$comment  = ( isset( $_POST["comment"] )  === true ) ?  trim($_POST["comment"])  : "";
 
//投稿がある場合のみ処理を行う
if (  isset($_POST["send"] ) ===  true ) {
    if ( $name   === "" ) $err_msg1 = "名前を入力してください"; 
 
    if ( $comment  === "" )  $err_msg2 = "コメントを入力してください";
 
    if( $err_msg1 === "" && $err_msg2 ==="" ){
        $fp = fopen( "data.txt" ,"a" );
        fwrite( $fp ,  $name."\t".$comment."\n");
        $message ="書き込みに成功しました。";
    }
 
}
 
$fp = fopen("data.txt","r");
 
$dataArr= array();
while( $res = fgets( $fp)){
    $tmp = explode("\t",$res);
    $arr = array(
        "name"=>$tmp[0],
        "comment"=>$tmp[1]
    );
    $dataArr[]= $arr;
} 
 
 
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>くずてつおきば。</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<!-- ▼全体の囲み▼ -->
<div id="wrapper">
<!-- ▼ヘッダ▼ -->
<header>

<!-- サイト名 -->
<h1>てつくずおきば</h1>

</header><!-- ▲ヘッダ▲ -->
<!-- ▼メニュー▼ -->
<a href="#" id="open"><span id="open-icon"></span></a>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/globalmenu.php'); ?>
<!-- ▲メニュー▲ -->

<!-- ▼メイン▼ -->
<div id="contents">
        <?php echo $message; ?><br>
        <?php echo $err_msg1; ?><br>
        <?php echo $err_msg2; ?><br>
        <form method="post" action="">
        名前<BR><input type="text" name="name" value="<?php echo $name; ?>" >
            <br>
            コメント<BR><textarea  name="comment" rows="4" cols="40"><?php echo $comment; ?></textarea>
            <br>
          <input type="submit" name="send" value="クリック" >
        </form>
        <dl>
         <?php foreach( $dataArr as $data ):?>
         <p><span><?php echo $data["name"]; ?></span>:<span><?php echo $data["comment"]; ?></span></p>
        <?php endforeach;?>
</dl>
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
