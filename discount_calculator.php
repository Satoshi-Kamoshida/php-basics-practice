<?php
// 要件：
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "{$final_price}円<br>";

$number = 15;

if ($number % 2 == 0) {
    echo "{$number}は偶数です<br>";
} else {
    echo "{$number}は奇数です<br>";
}
;

$age = 25;
$is_member = true;
$is_student = true;
if ($age >= 18 && $is_member == true) {
    echo "割引が適用されます<br>";
} elseif ($age >= 65 || $is_student == true) {
    echo "シニア・学生割引が適用されます<br>";
}
;

$score = 100;
echo "初期スコア:{$score}<br>";
//ボーナスステージクリア
$score += 50;
echo "ボーナスステージクリア後:{$score}<br>";
//ダメージを受ける
$score -= 30;
echo "ダメージを受けた後:{$score}<br>";
//２倍アイテムを使用
$score *= 2;
echo "最終スコア:{$score}";
?>