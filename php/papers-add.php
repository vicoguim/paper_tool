<?php
require_once "session.php";
require_once "../conf/general.php";
require_once INCLUDE_SMARTY;
require_once INCLUDE_ADODB;
require_once INCLUDE_ADODB_ERROR;

$smarty = new Smarty();

$smarty->assign('IMAGES_PATH',IMAGES_PATH);
$smarty->assign('JS_PATH',JS_PATH);
$smarty->assign('CSS_PATH',CSS_PATH);
$smarty->assign('JS_LIBS_PATH',JS_LIBS_PATH);
$smarty->assign('CSS_LIBS_PATH',CSS_LIBS_PATH);

$smarty->assign('SYS_TITLE',SYS_TITLE);

$smarty->assign('USERNAME',$_SESSION['username']);

$years = array();
for($i = 1980; $i <= 2050; $i++){
	$years[$i] = $i;
}

$smarty->assign('years',$years);


$smarty->display('papers-add.tpl');
?>
