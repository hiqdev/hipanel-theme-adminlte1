<?php
/// TODO remove this file and make it be taken from parent theme

use yii\helpers\Html;

?>
<ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <?= $this->render('//layouts/gravatar', ['size' => 90]); ?>
        <p>
            <?= \Yii::$app->user->identity->username; ?> - <?= \Yii::$app->user->identity->type; ?>
            <small>Member since Nov. 2014</small>
        </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
        <div class="col-xs-4 text-center">
            <?= Html::a(\Yii::t('app', 'Theme Settings'), ['/thememanager/settings']); ?>
        </div>
        <div class="col-xs-4 text-center">
            <?= Html::a(\Yii::t('app', 'Recharge account'), []); ?>
        </div>
        <div class="col-xs-4 text-center">
            <?= Html::a(\Yii::t('app', 'Add New Ticket'), []); ?>
        </div>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a(\Yii::t('app', 'Profile'), ['/logout'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
        <div class="pull-right">
            <?= Html::a(\Yii::t('app', 'Sign out'), ['/site/logout'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
    </li>
</ul>
