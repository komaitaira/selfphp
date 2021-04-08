<?php
  $result = 0;
  for($i = 0; $i <= 100; $i++) {
    if($i % 2 === 0) {
      continue;
    } else {
      $result += $i;
    }
  }
  print $result;