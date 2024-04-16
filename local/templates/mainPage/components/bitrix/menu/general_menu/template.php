
<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php if (!empty($arResult)): ?>
        <?php foreach ($arResult['NAV'] as $value): ?>
            <nav class="header-main__navigation-nav">
            <?php foreach ($value as $item): ?>
                <?php if ($item["SELECTED"]): ?>
                    <a href="<?= $item["LINKS"] ?>" class="header-main__navigation-link"><?= $item["TEXT"] ?></a>
                <?php endif ?>
            <?php endforeach; ?>
            </nav>
        <?php endforeach; ?>
<?php endif ?>

