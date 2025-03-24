<?php

use Bitrix\Main\Web\Json;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

if(isset($arResult["SHOW_SMS_FIELD"]) && $arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}


?>
 <div class="site-section">
      <div class="container">
        <div class="row">
		

<?ShowError($arResult["strProfileError"]);?>
<?
if (isset($arResult['DATA_SAVED']) && $arResult['DATA_SAVED'] == 'Y')
	ShowNote(GetMessage('PROFILE_DATA_SAVED'));
?>

<?if(isset($arResult["SHOW_SMS_FIELD"]) && $arResult["SHOW_SMS_FIELD"] == true):?>

<form method="post" class="p-5 bg-white border" action="<?=$arResult["FORM_TARGET"]?>">
<?=$arResult["BX_SESSION_CHECK"]?>

<table class="profile-table data-table">
	<tbody>
		<tr>
			<td><?echo GetMessage("main_profile_code")?><span class="starrequired">*</span></td>
			<td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
		</tr>
	</tbody>
</table>

<p><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_profile_send")?>" /></p>

</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_profile_resend',
	errorContainerId: 'bx_profile_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?= Json::encode([
			'signedData' => $arResult["SIGNED_DATA"],
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_profile_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_profile_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_profile_resend"></div>

<?else:?>

<script>
<!--
var opened_sections = [<?
$arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"] ?? '';
$arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
if ($arResult["opened"] <> '')
{
	echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
}
else
{
	$arResult["opened"] = "reg";
	echo "'reg'";
}
?>];
//-->

var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
</script>
<div class="col-md-12 col-lg-8 mb-5">
<form method="post" name="form1" class="p-5 bg-white border" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
<?=$arResult["BX_SESSION_CHECK"]?>
<input type="hidden" name="lang" value="<?=LANG?>" />
<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />

<div class="profile-link profile-user-div-link"><a title="<?=GetMessage("REG_SHOW_HIDE")?>" ><?=GetMessage("REG_SHOW_HIDE")?></a></div>
<div class="profile-block-<?= !str_contains($arResult["opened"], "reg") ? "hidden" : "shown"?>" id="user_div_reg">
<table class="profile-table data-table">
	<thead>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</thead>
	<tbody>
	

</div>
<div class="row form-group">
   <div class="col-md-12">
   <div class="font-weight-bold"><?=GetMessage('NAME')?></div>
	<input type="text" name="NAME" class="form-control" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" />
</div>
</div>
<div class="row form-group">
  	<div class="col-md-12">	
	  <div class="font-weight-bold">	<?=GetMessage('LAST_NAME')?></div>
		
	<input type="text" name="LAST_NAME" class="form-control" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" />
</div>
</div>
<div class="row form-group">
  	<div class="col-md-12">	
	  <div class="font-weight-bold"><?=GetMessage('SECOND_NAME')?></div>
	
	<input type="text" name="SECOND_NAME" class="form-control" maxlength="50" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" />
</div>
</div>
<div class="row form-group">
  	<div class="col-md-12">	
	  <div class="font-weight-bold"><?=GetMessage('LOGIN')?><span class="starrequired">*</span></div>

	<input type="text" name="LOGIN" class="form-control" maxlength="50" value="<? echo $arResult["arUser"]["LOGIN"]?>" />
		</div>
	</div>
<div class="row form-group">
  	<div class="col-md-12">	
	  <div class="font-weight-bold"><?=GetMessage('EMAIL')?><?if($arResult["EMAIL_REQUIRED"]):?><span class="starrequired">*</span><?endif?></div>
	
	<input type="text" name="EMAIL" class="form-control" maxlength="50" value="<? echo $arResult["arUser"]["EMAIL"]?>" />
</div>
</div>
<?if($arResult["PHONE_REGISTRATION"]):?>
<div class="row form-group">
	<div class="col-md-12">
	<div class="font-weight-bold"><?echo GetMessage("main_profile_phone_number")?><?if($arResult["PHONE_REQUIRED"]):?><span class="starrequired">*</span><?endif?></div>
	<input type="text" name="PHONE_NUMBER" class="form-control" maxlength="50" value="<? echo $arResult["arUser"]["PHONE_NUMBER"]?>" />
</div>
</div>
<?endif?>
<?if($arResult['CAN_EDIT_PASSWORD']):?>
	<div class="row form-group">
	<div class="col-md-12">
	<div class="font-weight-bold"><?=GetMessage('NEW_PASSWORD_REQ')?></div>
	
	<input type="password" name="NEW_PASSWORD" class="form-control" maxlength="50" value="" autocomplete="off" />
</div>
</div>

<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
<script>
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
		</td>
	</tr>
<?endif?>
<div class="row form-group">
<div class="col-md-12">
<div class="font-weight-bold"><?=GetMessage('NEW_PASSWORD_CONFIRM')?></div>
		<input type="password" name="NEW_PASSWORD_CONFIRM" class="form-control" maxlength="50" value="" autocomplete="off" />
		</div>
		</div>
<?endif?>
<?if($arResult["TIME_ZONE_ENABLED"] == true):?>
	<div class="row form-group">
<div class="col-md-12">
<div class="font-weight-bold"><?echo GetMessage("main_profile_time_zones")?></div>
		</div>
		</div>
	<tr>
		<td><?echo GetMessage("main_profile_time_zones_auto")?></td>
		<td>
			<select name="AUTO_TIME_ZONE" onchange="this.form.TIME_ZONE.disabled=(this.value != 'N')">
				<option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
				<option value="Y"<?=($arResult["arUser"]["AUTO_TIME_ZONE"] == "Y"? ' SELECTED="SELECTED"' : '')?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
				<option value="N"<?=($arResult["arUser"]["AUTO_TIME_ZONE"] == "N"? ' SELECTED="SELECTED"' : '')?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td><?echo GetMessage("main_profile_time_zones_zones")?></td>
		<td>
			<select name="TIME_ZONE"<?if($arResult["arUser"]["AUTO_TIME_ZONE"] <> "N") echo ' disabled="disabled"'?>>
<?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
				<option value="<?=htmlspecialcharsbx($tz)?>"<?=($arResult["arUser"]["TIME_ZONE"] == $tz? ' SELECTED="SELECTED"' : '')?>><?=htmlspecialcharsbx($tz_name)?></option>
<?endforeach?>
			</select>
		</td>
	</tr>
<?endif?>
	</tbody>
</table>
<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	
	<?// ******************** /User properties ***************************************************?>
	<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
	<p><input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>">&nbsp;&nbsp;
	<input class="btn btn-primary  py-2 px-4 rounded-0" type="reset" value="<?=GetMessage('MAIN_RESET');?>"></p>
</form>
<?
if($arResult["SOCSERV_ENABLED"])
{
	$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
			"SHOW_PROFILES" => "Y",
			"ALLOW_DELETE" => "Y"
		),
		false
	);
}
?>

<?endif?>

</div>

</div>
</div>
</div>
</div>
