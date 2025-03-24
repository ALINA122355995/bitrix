<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Недвижимость");?>
 <?$GLOBALS['arrFilter'] = array('PROPERTY_PRIORITY_DEAL_VALUE' => 'Да');?> 
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "Ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ADDRESS",
			1 => "PRIORITY_DEAL",
			2 => "EXTERNAL_LINKS",
			3 => "PRICE",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/object_one.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/object_two.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/object_three.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm bg-light">
	<div class="container">	
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"news_property-for_you", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "172800",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "news_property-for_you",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "PROPERTY_PRICE",
			5 => "PROPERTY_ADDRESS",
			6 => "PROPERTY_GARAGE",
			7 => "PROPERTY_BATHROOMS",
			8 => "PROPERTY_TOTAL_AREA",
			9 => "PROPERTY_FLOORS",
			10 => "PROPERTY_BEDS",
			11 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "Ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
				
	</div>
</div>
<div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"Our_services",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7776000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "Our_services",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"CODE",1=>"XML_ID",2=>"NAME",3=>"TAGS",4=>"PREVIEW_TEXT",5=>"PREVIEW_PICTURE",6=>"DETAIL_TEXT",7=>"DETAIL_PICTURE",8=>"IBLOCK_CODE",9=>"IBLOCK_NAME",10=>"IBLOCK_EXTERNAL_ID",11=>"PROPERTY_URL_resourses",12=>"",),
		"IBLOCKS" => array(0=>"6",),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"Our_blog",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "604800",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "Our_blog",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"IBLOCK_CODE",6=>"IBLOCK_NAME",7=>"DATE_CREATE",8=>"",),
		"IBLOCKS" => array(0=>"4",),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>