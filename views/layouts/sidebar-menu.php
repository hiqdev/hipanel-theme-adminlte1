<?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use hipanel\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => Yii::$app->menuManager->sidebar->getItemsArray(),
    ]
);
