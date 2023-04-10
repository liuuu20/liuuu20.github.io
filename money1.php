<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>儲值中心</title>
  <style>
    
    
  </style>
</head>
<body>

<?php
error_reporting(0);
  $n = $_POST[n];
  echo 
  "
  <h2>新增資金NTD：{$n}</h2>";
  if ($n <1 ){
   echo "<h3>儲值失敗</br></h3><img src='image/2.gif'>";
  } elseif($n >100000){
   echo "<h3>儲值失敗</br></h3><img src='image/2.gif'>";
 }else{
   echo "<h3>儲值成功</br></h3><img src='image/1.gif'>";
 }


?>


</body>
</html>