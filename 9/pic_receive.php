<?php
	$err = array();
	/*画像データを配列で取得
	送信ボタン押下後、$_FILESには画像データではなく、
	画像が一時的に保存される場所に預けれる*/
	//$_FILES['img']には、もとのファイル名が格納
	$img = $_FILES['img'];
	//画像データ中身確認
	var_dump($img);
	/*tmp_nameは、xamppの「tmp」内にできたファイル名、
	exif_imagetype()で画像の形式を取得する
	$_FILE['img']とか偽りやすく、使用禁止*/
	$type = exif_imagetype($img['tmp_name']);

	//バリデーション機能追加、
	if($type !== IMAGETYPE_JPEG && $type !== IMAGETYPE_PNG){
		$err['pic'] = '対象ファイルはPNGまたはJPGのみです。';
	}elseif($img['size'] > 102400){ //サーバへの負担軽減のため、サイズ確認
		$err['pic'] = 'ファイルサイズは100KB以下にしてください。';
	}else{
		//セキュリティ対策：ファイル名ドット以降取得(a.php.jpgなど防止)
		$extension = pathinfo($img['name'], PATHINFO_EXTENSION);
		//重複しない名前を作り、拡張子名をつなげる。md5()はハッシュ関数
		$new_img = md5(uniqid(mt_rand(), true)).'.'.$extension;
		//画像ファイルを仮のディレクトリから「img」に移動
		//第1引数は現在地、第2引数は移動先
		move_uploaded_file($img['tmp_name'], './img/'.$new_img);
	}
?>


<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>受信ページ</h1>
		<?php 
			if(count($err) >0){
				foreach($err as $row){
				echo '<p>'.$row.'</p>';
			}
				echo '<a href="./pic_send.php">戻る</a>';
			}else{
		?>
		<div><img src="http://localhost/www/9/img/<?php echo $new_img;?>"></div>
		<?php } ?>
	</body>
</html>