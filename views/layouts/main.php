<?php
use app\assets\ResourcesAsset;
use luya\helpers\Url;
use luya\cms\widgets\LangSwitcher;

ResourcesAsset::register($this);

/* @var $this luya\web\View */
/* @var $content string */

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->langShortCode; ?>">
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $this->title; ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?= $content; ?>
<!--    <footer class="footer">
        <div class="container">
                <ul>
                    <li>This website is made with <a href="https://luya.io" target="_blank">LUYA</a></li>
                    <li><a href="https://github.com/luyadev/luya" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://twitter.com/luyadev" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCfGs4sHk-D3swX0mhxv98RA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
        </div>
    </footer>-->
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
