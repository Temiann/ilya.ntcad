<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php if (!empty($arResult)): ?>
    <nav class="header-nav">
    <?php foreach ($arResult as $value): ?>
        <a class="header-nav__item" href="<?= $value["LINKS"] ?>"><?= $value["TEXT"]?></a>
    <?php endforeach; ?>
    </nav>
<?php endif ?>
