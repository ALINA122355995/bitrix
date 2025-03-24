<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><div class="site-section">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"registerr",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","NAME"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "/index.php",
		"USER_PROPERTY" => array("UF_TIPE"),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>