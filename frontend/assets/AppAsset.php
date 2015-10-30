<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/style.css',
    ];
    public $js = [
        'vendors/jquery/dist/jquery.min.js',
        'vendors/loadgo/loadgo.min.js',
        'vendors/queryloader2/queryloader2.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TimelineLite.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/ColorPropsPlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/DirectionalRotationPlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSRulePlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/AttrPlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/TextPlugin.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/RoundPropsPlugin.min.js',
        'scripts/page.js',
        'scripts/common.js',
    ];
    public $depends = [
    ];
}
