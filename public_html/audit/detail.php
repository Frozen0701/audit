<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"audit_page_wait",
	array(
		"COMPONENT_TEMPLATE" => "audit",
		"IBLOCK_TYPE" => "service",
		"IBLOCK_ID" => "28",
		"ELEMENT_ID" => $_REQUEST["ID"],
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PROP1",
			1 => "PROP2",
			2 => "PROP3",
			3 => "PROP4",
			4 => "PROP5",
			5 => "PROP6",
			6 => "PROP7",
			7 => "PROP8",
			8 => "PROP9",
			9 => "PROP10",
			10 => "PROP11",
			11 => "PROP12",
			12 => "PROP13",
			13 => "PROP14",
			14 => "PROP15",
			15 => "PROP16",
			16 => "PROP17",
			17 => "PROP18",
			18 => "PROP19",
			19 => "PROP20",
			20 => "PROP21",
			21 => "PROP22",
			22 => "PROP23",
			23 => "PROP24",
			24 => "PROP25",
			25 => "PROP26",
			26 => "PROP27",
			27 => "PROP28",
			28 => "PROP29",
			29 => "PROP30",
			30 => "PROP31",
			31 => "PROP32",
			32 => "PROP33",
			33 => "PROP34",
			34 => "PROP35",
			35 => "PROP36",
			36 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "360000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>