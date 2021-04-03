<?php
  // if文の場合
  $score = 75;
  if ($score >= 90) {
    print '優';
  } elseif ($score >= 70) {
    print '良';
  } elseif ($score >= 50) {
    print '可';
  } else {
    print '不可';
  }