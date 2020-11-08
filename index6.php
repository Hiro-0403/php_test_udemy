<?php
// <!-- for,while  繰り返し-->
// 繰り返す値が決まっていたらfor文
// 決まっていなかったwhile文
//continue,break
for($i = 0; $i < 10; $i++ ) {
  if ($i === 6) {
  continue;
  }
  echo $i;
}

echo"<br>";

$a = 0;
while ($a <= 10) {
  echo $a;
  $a++;
}
?>