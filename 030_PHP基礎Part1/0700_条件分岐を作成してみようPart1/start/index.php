<?php
$score = 80;
$kesseki = 1;
if ($score < 50 || $kesseki >= 5) {
  echo '不合格';
} else if ($score >= 50 && $score < 70) {
  echo '合格';
} else {
  echo '秀';
}
