<?php

/**
 * Theme main layout.
 *
 * @var frontend\components\View $this View
 * @var string $content Content
 */

use Yii;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use hipanel\widgets\Alert;

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<body class="<?= $this->bodyClasses; ?>">
<?php $this->beginBody(); ?>

<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="<?= Yii::$app->homeUrl ?>" class="logo">
        <?= Yii::$app->name; ?>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <?php if (!Yii::$app->user->identity->id) { ?>
                        <a href="/site/login">
                            <i class="glyphicon glyphicon-user"></i>
                            Login
                        </a>
                    <?php } else { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?= $this->render('//layouts/gravatar',['size'=>16]); ?>
                            <span><?= Yii::$app->user->identity->username ?> <i class="caret"></i></span>
                        </a>
                        <?= $this->render('//layouts/user-menu') ?>
                    <?php }; ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <?php // if (Yii::$app->user->identity->profile->avatar_url) : ?>
                <div class="pull-left image">
                    <?= $this->render('//layouts/gravatar',['size'=>45]); ?>
                </div>
                <?php // endif; ?>
                <div class="pull-left info">
                    <p>
                        <?= Yii::t('app', 'Hello, {name}', ['name' => 'User Name']) ?>
                    </p>
                    <a>
                        <i class="fa fa-circle text-success"></i> <?= Yii::t('app', 'Online') ?>
                    </a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?= $this->render('//layouts/sidebar-menu') ?>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $this->title ?>
                <?php if (isset($this->subtitle)) : ?>
                    <small><?= $this->subtitle ?></small>
                <?php endif; ?>
            </h1>
            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'label' => '<i class="fa fa-dashboard"></i> ' . Yii::t('app', 'Home'),
                    'url' => '/'
                ],
                'encodeLabels' => false,
                'tag' => 'ol',
                'links' => $this->breadcrumbs->getItemsArray(),
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= Alert::widget(); ?>
            <?= $content ?>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
