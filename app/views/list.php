<html>
<body>
<?php
if(isset($_GET['path']))
  $p = $_GET['path'];
else
  $p = '.';
$d = scandir($p);
/*
$folders = split('/',$p);
$path = '.';
foreach($folders as $f){
  $path .= '/' . $f;
  print "<a href='$path'>$f</a>/";
}
*/
foreach($d as $f){
  if(is_dir($p.'/'.$f)){
    print "<a href='list.php?path=$p/$f'>$f</a><br>";
  }
  else {
    print "<a href='$p/$f'>$f</a><br>";
  }
}
?>
</body>
</html>