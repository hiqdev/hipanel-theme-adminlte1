<?php
/**
 * @link      http://hiqdev.com/hipanel-theme-adminlte1
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte1;

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hiqdev\themes\adminlte\Theme
{
    public $label = 'AdminLte v1';

    public $assets = [
        'hiqdev\assets\adminlte1\AdminLteAsset',
        'hipanel\themes\adminlte\HipanelAsset',
    ];
}

