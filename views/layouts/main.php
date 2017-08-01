<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script type="text/javascript" src="<?=Url::base()?>/webAssets/js/jquery-3.1.1.min.js"></script> 
    <script type="text/javascript" src="<?=Url::base()?>/webAssets/js/jquery.jqpuzzle.full.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?=Url::base()?>/webAssets/css/jquery.jqpuzzle.css" />

    <script>
        var baseUrl = '<?=Url::base()?>';
    </script>
</head>
<body>
<?php $this->beginBody() ?>

        <?= $content ?>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
