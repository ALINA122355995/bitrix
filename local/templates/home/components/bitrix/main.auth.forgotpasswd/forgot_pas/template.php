<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');
	return;
}
?>

<div class="col-md-12 col-lg-8 mb-5">

	<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
	<?elseif ($arResult['SUCCESS']):?>
	<div class="alert alert-success">
		<?= $arResult['SUCCESS'];?>
	</div>
	<?endif;?>

	<h3 class="bx-title"><?= Loc::getMessage('MAIN_AUTH_PWD_HEADER');?></h3>

	<p class="bx-authform-content-container"><?= Loc::getMessage('MAIN_AUTH_PWD_NOTE');?></p>

	<form name="bform" method="post" target="_top" class="p-5 bg-white border" action="<?= POST_FORM_ACTION_URI;?>">

		<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_LOGIN');?></div>
		<div class="col-md-12 mb-3 mb-md-0">
				<input type="text" name="<?= $arResult['FIELDS']['login'];?>" class="form-control" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" />
			</div>

				<div class="col-md-12 mb-3 mb-md-0"><span class="login-label"><?= Loc::getMessage('MAIN_AUTH_PWD_OR');?></span></div>
		</div>

		<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_EMAIL');?></div>
		<div class="col-md-12 mb-3 mb-md-0">
				<input type="text"  name="<?= $arResult['FIELDS']['email'];?>" class="form-control" maxlength="255" value="" />
			</div>
		</div>

		<?if ($arResult['CAPTCHA_CODE']):?>
			<input type="hidden" class="form-control" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" />
			<div class="bx-authform-formgroup-container dbg_captha">
				<div class="bx-authform-label-container">
					<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_CAPTCHA');?>
				</div>
				<div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /></div>
				<div class="bx-authform-input-container">
					<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
				</div>
			</div>
		<?endif;?>

		<div class="row form-group">
		<div class="col-md-12">
			<input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_SUBMIT');?>" />
		</div>
		</div>

		<?if ($arResult['AUTH_AUTH_URL'] || $arResult['AUTH_REGISTER_URL']):?>
			<hr class="bxe-light">
			<noindex>
			<?if ($arResult['AUTH_AUTH_URL']):?>
				<div class="bx-authform-link-container">
					<a href="<?= $arResult['AUTH_AUTH_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_PWD_URL_AUTH_URL');?>
					</a>
				</div>
			<?endif;?>
			<?if ($arResult['AUTH_REGISTER_URL']):?>
				<div class="bx-authform-link-container">
					<a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_PWD_URL_REGISTER_URL');?>
					</a>
				</div>
			<?endif;?>
			</noindex>
		<?endif;?>

	</form>
</div>

<script>
	document.bform.<?= $arResult['FIELDS']['login'];?>.focus();
</script>
