<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? $component = $this->getComponent();
$this->setFrameMode(true); ?>

<div class="col-md-12 text-center">
  <div class="site-pagination">

    <? if ($arResult["PAGE_COUNT"] > 1): ?>
      <? if ($arResult["REVERSED_PAGES"] === true): ?>

        <? $page = $arResult["START_PAGE"] - 1;
        while ($page >= $arResult["END_PAGE"] + 1): ?>
          <a href="<?= htmlspecialcharsbx($component->replaceUrlTemplate($page)) ?>"
             <?= ($page == $arResult["CURRENT_PAGE"]) ? 'class="active"' : '' ?>>
             <span><?= ($arResult["PAGE_COUNT"] - $page + 1) ?></span>
          </a>
          <? $page--; ?>
        <? endwhile; ?>

      <? else: ?>

        <? $page = $arResult["START_PAGE"];
        while ($page <= $arResult["END_PAGE"]): ?>
          <a href="<?= htmlspecialcharsbx($component->replaceUrlTemplate($page)) ?>"
             <?= ($page == $arResult["CURRENT_PAGE"]) ? 'class="active"' : '' ?>>
             <span><?= $page ?></span>
          </a>
          <? $page++; ?>
        <? endwhile; ?>

      <? endif; ?>
    <? endif; ?>

    <div style="clear:both"></div>
  </div>
</div>