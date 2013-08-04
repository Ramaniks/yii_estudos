<?php

// change the following paths if necessary

# Modo debug ou produção?
if ($_SERVER['HTTP_HOST'] == 'instaquadros.com') {
    defined('YII_DEBUG') or define('YII_DEBUG',false);
} else {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}


if (YII_DEBUG) {

       $yii=dirname(__FILE__).'/../yii-1.1.13/framework/yii.php';
       //$config=dirname(__FILE__).'/protected/config/main.php';
	require_once($yii);
	
    $localConfig = require(dirname(__FILE__).'/protected/config/main-local.php');
    $baseConfig  = require(dirname(__FILE__).'/protected/config/main.php');


    $config = CMap::mergeArray($baseConfig, $localConfig);


} else {

	$yii=dirname(__FILE__).'/../yii-1.1.13/framework/yii.php';
	$config=dirname(__FILE__).'/protected/config/main.php';

}



//require_once($yii);
Yii::createWebApplication($config)->run();



