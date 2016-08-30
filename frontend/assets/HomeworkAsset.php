<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class HomeworkAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/zabuto_calendar.css',
        'lineicons/style.css',
        'font-awesome/css/font-awesome.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/style-responsive.css',
        
    ];
    public $js = [
        'js/gritter/css/jquery.gritter.css',
        'js/jquery.js',
        'js/jquery-1.8.3.min.js',
        'js/bootstrap.min.js',
        'js/jquery.dcjqaccordion.2.7.js',
        'js/jquery.scrollTo.min.js',
        'js/jquery.nicescroll.js',
        'js/jquery.sparkline.js',
        'js/common-scripts.js',
        'js/gritter/js/jquery.gritter.js',
        'js/gritter-conf.js',
        'js/sparkline-chart.js',
        'js/zabuto_calendar.js',
        'js/chart-master/Chart.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

