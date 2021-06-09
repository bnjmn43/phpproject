<?php
require_once('item.php');
require_once('info.php');

$first = new Item('Tシャツ(ブルー)(半袖)', 900, 'images/shirt1.png');
$second = new Item('Tシャツ(幾何模様)(半袖)', 900, 'images/shirt2.png');
$third = new Item('Tシャツ(ヤシの葉)(半袖)', 900, 'images/shirt3.png');
$fourth = new Item('ポロシャツ(白)(半袖)', 1200, 'images/shirt4.png');
$fifth = new Item('ポロシャツ(グレー)(半袖)', 1200, 'images/shirt5.png');
$sixth = new Item('ネル生地Tシャツ(半袖)', 900, 'images/shirt6.png');

$items = array($first, $second, $third, $fourth, $fifth, $sixth);

$info1 = new Info('Tシャツ(ブルー)(半袖)', '0111-AAAA1', 'SHIRT', '綿100%', 'なし', 'あり', 'なし', 'フリーサイズ');
$info2 = new Info('Tシャツ(幾何模様)(半袖)', '0111-BBBB1', 'SHIRT', '綿100%', 'なし', 'あり', 'なし', 'フリーサイズ');
$info3 = new Info('Tシャツ(ヤシの葉)(半袖)', '0111-CCCC1', 'SHIRT', '綿100%', 'なし', 'あり', 'なし', 'フリーサイズ');
$info4 = new Info('ポロシャツ(白)(半袖)', '0222-AAAA2', 'POLO', 'ポリエステル100%', 'なし', 'なし', 'なし', 'フリーサイズ');
$info5 = new Info('ポロシャツ(グレー)(半袖)', '0222-BBBB2', 'POLO', 'ポリエステル100%', 'なし', 'なし', 'なし', 'フリーサイズ');
$info6 = new Info('ネル生地Tシャツ(半袖)', '0333-AAAA3', 'WEAR', '綿100%', 'なし', 'あり', 'なし', 'フリーサイズ');

$infos = array($info1, $info2, $info3, $info4, $info5, $info6);
?>