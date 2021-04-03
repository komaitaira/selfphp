<?php
$i = 6;

print "do~while文";
// do~while文は後置判定（条件式にかかわらず必ず1回はループが実行される）
do {
  print "{$i}番目のループです。<br />";
  $i++;
} while ($i < 6);

print "while文";
// while文は前置判定
while ($i < 6) {
  print "{$i}番目のループです。<br />";
  $i++;
}