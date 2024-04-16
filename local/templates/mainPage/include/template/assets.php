<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;


Asset::getInstance()->addString('<script defer="defer" src="'. SITE_TEMPLATE_PATH . '/scripts/app.js"></script>');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/scripts/vendor.js");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style/590.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style/app.css");

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');
Asset::getInstance()->addString('<meta charset="utf-8">');
?>