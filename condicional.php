<?php
//date_default_timezone_set('America/Belize');
$t = date("H");

if ($t < "12") {
  echo "Have a good morning!" . "<br>";
} elseif ($t < "18") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


switch ($t) {
    case "12":
      echo "hora é igual a 12";
      break;
    case "9":
      echo "hora é igual a 9";
      break;
    case "8":
      echo "hora é igual a 8";
      break;
    default:
      echo "a hora não é nenhuma das anteriores";
  }
?>