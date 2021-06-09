<?php
require_once('item.php');
require_once('data.php');
require_once('info.php');

$itemName = $_GET['name'];
$item = Item::findByName($items, $itemName);
$info = Info::findByInfoName($infos, $itemName);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>phpproject</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="mt-5 info-wrapper">
    <div class="info-item">
      <img src="<?php echo $item->getImage() ?>" class="item-image">
      <h3 class="pt-2 text-center item-name"><?php echo $item->getName() ?></h3>
      <p class="text-center price">¥<?php echo $item->getTaxIncludedPrice() ?><span>（税込）</span></p>
      <div class="detail-wrapper">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th class="pl-1">商品詳細</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">型番</td>
              <td class="align-middle"><?php echo $info->getNumber() ?></td>
            </tr>
            <tr>
              <td class="align-middle">ブランド</td>
              <td class="align-middle"><?php echo $info->getBrand() ?></td>
            </tr>
            <tr>
              <td class="align-middle">素材</td>
              <td class="align-middle"><?php echo $info->getMaterial() ?></td>
            </tr>
            <tr>
              <td class="align-middle">裏地</td>
              <td class="align-middle"><?php echo $info->getLining() ?></td>
            </tr>
            <tr>
              <td class="align-middle">生地の伸縮性</td>
              <td class="align-middle"><?php echo $info->getStretch() ?></td>
            </tr>
            <tr>
              <td class="align-middle">生地の透け感</td>
              <td class="align-middle"><?php echo $info->getSeethrough() ?></td>
            </tr>
            <tr>
              <td class="align-middle">商品サイズ</td>
              <td class="align-middle"><?php echo $info->getSize() ?>*</td>
            </tr>
          </tbody>
        </table>
        <p class="pt-3">*フリーサイズ…下記をご参照ください。</p>
        <table class="table table-bordered text-center size">
          <thead class="thead-dark">
            <tr>
              <th scope="col">着丈</th>
              <th scope="col">身幅</th>
              <th scope="col">肩幅</th>
              <th scope="col">袖丈</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>75</td>
              <td>49</td>
              <td>43</td>
              <td>66</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="text-center">
      <a class="my-5 py-3 px-2 btn" href="index.php">アイテム一覧へ戻る</a>
    </div>
  </div>
</body>
</html>