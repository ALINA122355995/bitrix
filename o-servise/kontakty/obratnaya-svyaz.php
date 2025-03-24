<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-section">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback",
	Array(
		"COMPONENT_TEMPLATE" => "feedback",
		"EMAIL_TO" => "gaffarova_2001@mail.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><br>
 <br>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/feedback2.php"
	)
);?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<h3 class="h6 text-black mb-3 text-uppercase"><br>
 </h3>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>