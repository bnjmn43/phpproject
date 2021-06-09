<?php 
require_once('data.php');
require_once('item.php');
$timestamp = date("YmdHis"); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>phpproject</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css?v=<?php echo $timestamp;?>">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="px-5 pb-5 item-wrapper container">
    <h1 class="py-5 logo">メンズ新作Tシャツ</h1>
    <hr color="#322F33">
    <h3 class="py-3">新作　<?php echo Item::getCount() ?>アイテム</h3>
    <form method="post" action="confirm.php">
      <div class="pt-5">
        <?php foreach ($items as $item): ?>
          <div class="px-3 pb-5 item">
            <img src="<?php echo $item->getImage() ?>" class="item-image">
            <div class="pt-3 text-left">
              <h3>
                <a class="link" href="show.php?name=<?php echo $item->getName() ?>">
                  <?php echo $item->getName() ?>
                </a>
              </h3>
              <p class="pt-3 pb-1 price">¥<?php echo $item->getTaxIncludedPrice() ?><span>（税込）</span></p>
              <p>カートに入れる<input class="ml-3" type="text" value="0" name="<?php echo $item->getName() ?>"></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <input class="py-3 px-2 btn" type="submit" value="カートを見る">
    </form>
    <p class="pt-5">※このサイトは個人の製作物であり商用ではございません。</p>
  </div>
</body>
</html>