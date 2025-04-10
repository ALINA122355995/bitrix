<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="service-box">
    <div class="services-list">
        <?php if (!empty($arResult)): ?>
            <?php
            $count = count($arResult);
            for ($i = 0; $i < $count; $i++):
                $arItem = $arResult[$i];
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;

                $activeClass = $arItem["SELECTED"] ? 'active' : '';

                // Выбор иконки по названию пункта
                switch (mb_strtolower($arItem["TEXT"])) {
                    case 'история':
                        $iconClass = 'bi-bookshelf';
                        break;
                    case 'команда':
                        $iconClass = 'bi-people';
                        break;
                    default:
                        $iconClass = 'bi-arrow-right-circle';
                        break;
                }
                ?>
                <a href="<?= $arItem["LINK"] ?>" class="<?= $activeClass ?>">
                    <i class="bi <?= $iconClass ?>"></i>
                    <span><?= $arItem["TEXT"] ?></span>
                </a>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</div>
