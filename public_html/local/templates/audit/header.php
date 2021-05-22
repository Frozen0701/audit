<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=794" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title><?$APPLICATION->ShowTitle();?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet" />
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/normalize.css')?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap-grid.css')?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css')?>
</head>
<body>