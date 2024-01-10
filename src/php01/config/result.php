<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES). "<br />";
print "私の名前は、" . $name ;
$list = htmlspecialchars($_POST["list"],ENT_QUOTES). "<br />";
print "ご注文の商品は、". $list;
$order = htmlspecialchars($_POST["order"],ENT_QUOTES). "<br />";
print "ご注文数は、". $order;


