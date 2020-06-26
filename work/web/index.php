<?php

function h($str)
{
  return htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
}

$name = 'Taro  <script>alert(1);</script>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  
  <p>Hello <?= $name; ?> </p>
 
</body>
</html>