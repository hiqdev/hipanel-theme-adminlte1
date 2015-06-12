<?php
/**
 * @link        http://hiqdev.com/hipanel-theme-adminlte1
 * @license     BSD 3-clause
 * @copyright   Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte1;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'themes' => [
            'adminlte1' => [
                'class' => 'hipanel\themes\adminlte1\AdminLteTheme',
            ],
        ],
    ];

}
