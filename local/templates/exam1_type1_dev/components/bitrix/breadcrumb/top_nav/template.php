


<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
echo '<pre>';
print_r($arParams);
echo '</pre>';

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="page-title dark-background">';
$strReturn .= '<div class="container position-relative">
 <h1 class="mb-2">'.$APPLICATION->GetTitle().'</h1>
 <title><?'.$APPLICATION->ShowProperty("UF_PAGE_TEXT_UNDER_TITLE").'?></title>';
 $desc = $APPLICATION->GetProperty("page_text_under_title");

 if (!empty($desc)) {
	 $strReturn .= '<p>' . $desc . '</p>';
 } else {
	 $strReturn .= '<p></p>';
 }
 
 

 $strReturn .= '<div class="bx-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

 



$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');



	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<nav class="breadcrumbs">
				
				<ol>
				    
				    <li><a href="'.$arResult[$index]["LINK"].'">'.$title.'</a></li>
					<li></li>';
	}
	else
	{
		$strReturn .= ''.$title.'';
	}
}
$strReturn .= '</ol></nav>';

$strReturn .= '</div></div></div>';

$strReturn .= '<div style="clear:both"></div>';
return $strReturn;
