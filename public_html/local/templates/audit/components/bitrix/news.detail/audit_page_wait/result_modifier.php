<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php

$image= array(
'img_susses' =>SITE_TEMPLATE_PATH.'/img/susses.svg',
'img_middle' =>SITE_TEMPLATE_PATH.'/img/middle.svg',
'img_fail' =>SITE_TEMPLATE_PATH.'/img/fail.svg',
);
$result_susses = 0;
$result_middle = 0;
$result_fail = 0;
$sum_total = 0;
$sum_total_middle = 0;
?>


<?
	if($arResult['PROPERTIES']['PROP4']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP4']['VALUE'] != '0'){
		 ++$result_susses;
		}else{
	        ++$result_fail;
			}
	endif;
	if($arResult['PROPERTIES']['PROP5']['VALUE'] != 'X'):
		++$result_susses;
	endif;
	if($arResult['PROPERTIES']['PROP6']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP6']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP7']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP7']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP8']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP8']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP9']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP9']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP10']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP10']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
		if($arResult['PROPERTIES']['PROP11']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP11']['VALUE'] > '0'){
			++$result_fail;
		}else{
			++$result_susses;
		}endif;
	if($arResult['PROPERTIES']['PROP12']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP12']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP13']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP13']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP14']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP14']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;

	if($arResult['PROPERTIES']['PROP15']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP15']['VALUE'] >= '50'){
			 ++$result_susses;
		}elseif($arResult['PROPERTIES']['PROP15']['VALUE'] == '0'){
				 ++$result_fail;
		}else{
				++$result_middle;
		}
	endif;

	if($arResult['PROPERTIES']['PROP16']['VALUE'] != 'X'):
		if(($arResult['PROPERTIES']['PROP16']['VALUE'] <= '10')
				AND($arResult['PROPERTIES']['PROP2']['VALUE'] == 'Корпоративный' && 'Магазин' && 'Федеральный')){
			++$result_fail;
		}else{
			++$result_susses;
		}endif;

	if($arResult['PROPERTIES']['PROP17']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP17']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP18']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP18']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP19']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP19']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP20']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP20']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP21']['VALUE'] != 'X'):
		if(($arResult['PROPERTIES']['PROP21']['VALUE'] >= '0') AND ($arResult['PROPERTIES']['PROP21']['VALUE'] <= '49')){
			++$result_fail;
		}elseif (($arResult['PROPERTIES']['PROP21']['VALUE'] >= '50') AND ($arResult['PROPERTIES']['PROP21']['VALUE'] <= '89')){
			++$result_middle;
		}else{
			++$result_susses;
		}
	endif;
	if($arResult['PROPERTIES']['PROP22']['VALUE'] != 'X'):
		if(($arResult['PROPERTIES']['PROP22']['VALUE'] >= '0') AND ($arResult['PROPERTIES']['PROP22']['VALUE'] <= '49')){
			++$result_fail;
		}elseif (($arResult['PROPERTIES']['PROP22']['VALUE'] >= '50') AND ($arResult['PROPERTIES']['PROP22']['VALUE'] <= '89')){
			++$result_middle;
		}else{
			++$result_susses;
		}
	endif;

	if($arResult['PROPERTIES']['PROP23']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP23']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP24']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP24']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP25']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP25']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP26']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP26']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP27']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP27']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP28']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP28']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP29']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP29']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP30']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP30']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP31']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP31']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP32']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP32']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP33']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP33']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;
	if($arResult['PROPERTIES']['PROP34']['VALUE'] != 'X'):
		if($arResult['PROPERTIES']['PROP34']['VALUE'] != '0'){
			++$result_susses;
		}else{
			++$result_fail;
		}
	endif;

	$sum_total = $result_susses + $result_middle +$result_fail;
	$arResult["ITEMS"][0]["SUSSES"].= $result_susses;
	$arResult["ITEMS"][0]["MIDDLE"].= $result_middle;
	$arResult["ITEMS"][0]["FAIL"].= $result_fail;
	$arResult["ITEMS"][0]["SUM_TOTAL"].= $sum_total;
?>

