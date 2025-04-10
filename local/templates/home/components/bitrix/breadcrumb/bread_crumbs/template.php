<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;


if(empty($arResult))
  return "";

$strReturn = ''; 
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
  $strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('.SITE_TEMPLATE_PATH.'/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">';
$strReturn .= '<div class="container">';
$strReturn .= '  <div class="row align-items-center justify-content-center text-center">';
$strReturn .= '  <div class="col-md-10">
    <h1 class="mb-2">'.$APPLICATION->GetTitle().'</h1>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
  $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
  $arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

  if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
  {    $strReturn .= '  
             <a href="'.$arResult[$index]["LINK"].'">'.$title.'</a><span class="mx-2 text-white"></span><strong class="text-white"> &bullet;</strong>
        <meta itemprop="position" content="'.($index + 1).'">';}
  else
  {    $strReturn .= '
    <strong class="text-white"text-center>
        <span>'.$title.'</span></strong>
      ';
      
  }}


$strReturn .= '</div>

</div>
 </div>
 </div>
</div>
  </div>';

return $strReturn;
