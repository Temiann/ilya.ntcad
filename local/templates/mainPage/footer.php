<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <?require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/template/footer.php';?>
    </div>
    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addString("<script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>'></script>");
    ?>
    </body>
</html>