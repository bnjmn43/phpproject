<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>phpproject</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <div class="my-5 order-wrapper">
    <h2 class="mb-4">注文内容確認</h2>
    <?php $totalPayment = 0 ?>
    <?php foreach ($items as $item): ?>
      <?php 
        $orderCount = $_POST[$item->getName()];
        $item->setOrderCount($orderCount);
        $totalPayment += $item->getTotalPrice();  
      ?>
      <?php if ($orderCount != 0): ?>
        <table class="table table-sm">
          <tbody>
            <tr>
              <td style="width: 75%" class="text-left"><?php echo $item->getName() ?><br><?php echo $orderCount ?>点</td>
              <td style="width: 25%" class="align-middle">計<p><?php echo $item->getTotalPrice() ?></p>円</td>
            </tr>
          </tbody>
        </table>
      <?php endif ?>
    <?php endforeach ?>
    <?php if ($totalPayment != 0): ?>
      <h3 class="py-4">合計金額: <?php echo $totalPayment ?>円</h3>
    <?php else: ?>
      <h3>カートの商品はありません</h3>
    <?php endif ?>
    <div class="text-center">
      <a class="my-5 py-3 px-2 btn" href="index.php">アイテム一覧へ戻る</a>
    </div>
  </div>
</body>
</html>