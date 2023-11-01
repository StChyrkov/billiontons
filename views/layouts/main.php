<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&family=Inter:wght@500&family=Rubik&display=swap" rel="stylesheet">  
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" class="site-header">
    <div class="container">
        <div class="header-text flex-container justify-center">
            <p>Billiontons Handels <span class="und">und</span> Consulting GmbH</p>
        </div>
    </div>
</header>

<main id="main" role="main">
        <?= $content ?>
</main>

<footer id="footer" class="site-footer">
    <div class="container">
        <div class="footer-content flex-container">
            <div class="left-footer-block">
                <div class="logo-text-block flex-container">
                    <div class="logo-block">
                        <img src="../logo/logo.png" alt="logo" class="footer-logo">
                    </div>
                    <div class="footer-text-block">
                        <div class="flex-container justify-center">
                            <div class="footer-text">Billiontons Handels</div>
                        </div>
                        <div class="flex-container justify-center">
                            <div class="footer-text footer-small">und</div>
                        </div>
                        <div class="flex-container justify-center">
                            <div class="footer-text">Consulting GmbH</div>
                        </div>
                    </div>  
                </div>
                <div class="footer-copyright">
                    Billiontons Handels und Consulting GmbH © 2023
                </div>
            </div>
            <div class="right-footer-block">
                <div class="phone-block-footer">
                    <div class="phone-number">+4366493017565</div>
                    <div class="phone-text">for mobile operator tariffs</div>
                </div> 
                <div class="footer-mail">office@billiontons.at</div> 
                <div class="footer-location">
                    <img src="../logo/vector.png" alt="location-icon" class="footer-location-icon">
                    <a href="https://maps.app.goo.gl/NFc2ebEN7yTJqoQw6" class="location-link" target="_blank">Karajangasse 7, 1200 Wien, Austria</a>
                </div> 
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
