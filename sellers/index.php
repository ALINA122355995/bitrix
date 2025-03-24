<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет продавца");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"registration",
	Array(
		"CHECK_RIGHTS" => "N",
		"COMPONENT_TEMPLATE" => "registration",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>