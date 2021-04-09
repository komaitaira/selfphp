<?php
  // $result = 0;
  // for($i = 0; $i <= 100; $i++) {
  //   if($i % 2 === 0) {
  //     continue;
  //   } else {
  //     $result += $i;
  //   }
  // }
  // print $result;

  // $result = 0;
  // $i = 0;
  // while ($i <= 100) {
  //   $i++;
  //   if ($i % 2 === 0) {
  //     continue;
  //   } else {
  //     $result += $i;
  //   }
  // }
  // print $result;

  $languages = ["PHP", "JSP", "ASP", "JavaScript", "VBScript"];
  foreach($languages as $language) {
    switch ($language) {
      case "PHP" :
      case "JSP" :
      case "ASP" :
        print "サーバーサイド技術";
        break;
      case "JavaScript" :
      case "VBScript" :
        print "クライアントサイドスクリプト";
        break;
    }
  }
  // switch {
  //   case 
  // }