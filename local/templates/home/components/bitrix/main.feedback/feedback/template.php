<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>
<div class="col-md-12 col-lg-8 mb-5">
<form action="<?=POST_FORM_ACTION_URI?>" class="p-5 bg-white border" method="POST">
<?=bitrix_sessid_post()?>
<div class="row form-group">
<div class="col-md-12 mb-3 mb-md-0">
			<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="font-weight-bold">*</span><?endif?>
		</div>
		<input type="text" name="user_name"  class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="row form-group">
   <div class="col-md-12">
			<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="font-weight-bold">*</span><?endif?>
		</div>
		<input type="text" name="user_email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<div class="row form-group">
   <div class="col-md-12">
			<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
      </div>
		<textarea name="MESSAGE" rows="5" cols="30" rows="5" class="form-control" placeholder="<?=GetMessage("type_a_message")?>" ><?=($arResult["MESSAGE"] ?? '')?></textarea>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
  <div class="row form-group">
  <div class="col-md-12">
	<input type="hidden" name="PARAMS_HASH" class="btn btn-primary  py-2 px-4 rounded-0" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit"  name="submit" class="btn btn-primary  py-2 px-4 rounded-0" value="<?=GetMessage("MFT_SUBMIT")?>">
  </div>
  </div>
</form>
</div>

