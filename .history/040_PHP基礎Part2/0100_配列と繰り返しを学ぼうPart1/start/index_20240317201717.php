<?php
$arry = ['taro', 'hanako', 'jiro'];
$arry[1] = 'sachiko';
$arry[] = 'saburo';

// var_dump($arry);

// echo $arry[1];

for ($i = 0; $i < 4; $i++) {
  echo '<div>', $arry[$i], '</div>';
}
