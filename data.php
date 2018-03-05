<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('豚生姜焼きと鶏唐揚げ弁当', 550, 'images/TKCO016.jpg', 'アイス');
$coffee = new Drink('越後の銘酒「八海山」の搾り粕を使った赤魚の粕焼', 600, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-tsukutomi.com/w640h427/TKDE001.jpg', 'ホット');
$curry = new Food('大人のお子様LUNCH（ドライカレー＆チキントマト煮）', 600, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-sazanami.com/w640h427/TKTL005.jpg', 3);
$pasta = new Food('仙台黒毛和牛牛めし VS 岩手県産岩中豚の塩カルビ重', 700, 'https://public-stafes.s3.amazonaws.com/common/stores/shashoku-sanrikugochisoutamatebako.com/w640h427/TKVB016.jpg', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

// 以下の$review1 ~ $review8を削除して、userIdプロパティをセットするためのコードを貼り付けてください
$review1 = new Review($juice->getName(), $user1->getId(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), $user1->getId(), '具がゴロゴロしていてとてもおいしいです');
$review3 = new Review($coffee->getName(), $user2->getId(), '香りがいいです');
$review4 = new Review($pasta->getName(), $user2->getId(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($juice->getName(), $user3->getId(), '普通のジュース');
$review6 = new Review($curry->getName(), $user3->getId(), '値段の割においしいカレーだと思いました');
$review7 = new Review($coffee->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($pasta->getName(), $user4->getId(), '具材にこだわりを感じました。');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>