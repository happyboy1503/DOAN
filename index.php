<?php
include("controllers/Smarty_shop_mobile.php");
$smarty = new Smarty_shop_mobile();
$smarty->assign("title","Cửa hàng điện thoại KHTN");
$smarty->display("layout.tpl");
?>