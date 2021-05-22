
<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$image= array(
	'img_susses' =>SITE_TEMPLATE_PATH.'/img/susses.svg',
	'img_middle' =>SITE_TEMPLATE_PATH.'/img/middle.svg',
	'img_fail' =>SITE_TEMPLATE_PATH.'/img/fail.svg',
);
$result_susses = count($image['img_susses']);
echo  $sum_susses;
//$result_middle = count($image['img_middle']);
//$result_fail = count($image['img_fail']);


	$sum_susses =--$result_susses;
	echo $sum_susses;
	$result_middle = count($image['img_middle']);
	$result_fail = count($image['img_fail']);
?>
