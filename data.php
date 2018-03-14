<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$menu1 = new Food('ガパオBOX', 600, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-lunch-factory.com/w640h427/TKCK004.jpg',2,'ランチファクトリー');
$menu2 = new Food('メダイの西京焼き弁当', 550, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-kamokura.com/w640h427/TKFF016.jpg',1,'賀茂蔵');
$menu3 = new Food('麻婆茄子（マーボーナス）二段弁当', 550, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-kamokura.com/w640h427/TKFF021.jpg',3,'賀茂蔵');
$menu4 = new Food('【洋食】柔らかローストチキン弁当', 600, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-mana.com/w640h427/TKSY032.jpg',1,'手作り弁当 マナ蔵');
$menu5 = new Food('【中華】野菜たっぷりチンジャオロース弁当',600,'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-mana.com/w640h427/TKSY035.jpg',1,'手作り弁当 マナ');
$menu6 = new Food('たいめいけん洋食や　ポークジンジャー重',800,'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-taimeiken-t.com/w640h427/TOPJ001.jpg',1,'東京 日本橋 三代目 たいめいけん');

$menus = array($menu1, $menu2, $menu3, $menu4,$menu5,$menu6);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato', 'male');
$user5 = new User('yamamoto','male');

$users = array($user1, $user2, $user3, $user4,$user5);

// レビュー
$review1 = new Review($menu1->getName(), $user1->getId(), 'ボリュームたっぷり');
$review2 = new Review($menu2->getName(), $user1->getId(), '季節の一品！');
$review3 = new Review($menu3->getName(), $user2->getId(), '香りがいいです');
$review4 = new Review($menu4->getName(), $user2->getId(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($menu1->getName(), $user3->getId(), '弁当オブザイヤー');
$review6 = new Review($menu2->getName(), $user3->getId(), 'コスパよし');
$review7 = new Review($menu3->getName(), $user4->getId(), '酸味が強め');
$review8 = new Review($menu4->getName(), $user4->getId(), '具材にこだわりを感じました。');
$review9 = new Review($menu5->getName(), $user5->getId(), '本場の味を感じました');
$review10 =new Review($menu6->getName(), $user5->getId(), 'ワンダフル！！');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8,$review9,$review10);

?>