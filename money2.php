<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>儲值中心</title>
</head>
<body>



<?php
error_reporting(0);
  $k = $_POST[k];
  echo 
  "
  <h3>儲值結果：</h3>{$k}<br>";
  if ($k == 新增資金NTD300){
  	echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
  } elseif ($k == 新增資金NTD500) {
  	echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
  }elseif ($k == 新增資金NTD1000) {
  	echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
  }elseif ($k == 新增資金NTD3000) {
  	echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
  }elseif ($k == 新增資金NTD5000) {
  	echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
}
?>



</body>
</html>