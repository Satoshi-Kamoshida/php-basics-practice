<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;
?>
<?php echo '商品名: ' . $product_name; ?><br>
<?php echo '単価: ' . $price; ?><br>
<?php echo '数量: ' . $quantity; ?><br>
<?php echo '小計: ' . $subtotal; ?><br>
<?php echo '消費税(10%): ' . $tax_amount; ?><br>
<?php echo '合計金額: ' . $total; ?>