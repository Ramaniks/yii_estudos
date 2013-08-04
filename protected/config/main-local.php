<?php
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

//Você deve ultilizar esse arquivo para suas configurações localhost - Nâo esqueça de conf com dados de seu banco local
return array(
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'admin',
            'ipFilters' => '',
            //'ipFilters'=>array('192.168.1.106', '192.168.1.109', '192.168.1.111'),
        ),
    ),

    // application components
    'components' => array(
        'cache' => array(
            //'class' => 'CDbCache',
            'class' => 'CDummyCache',
            //'class'=>'system.caching.CApcCache',
        ),
        
        'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_estudos',
			'username' => 'root',
			'password' => 'luiza',

			// configuracoes extras
			'emulatePrepare' => true,
			'initSQLs'=>array("set time_zone='-03:00';"),
			'charset' => 'utf8',
	),
        /*'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace',
                    'categories' => 'application',
                    //'categories' => 'system.db.*',
                    'showInFireBug' => false,
                    //'logFile' => 'trace.log',
                    //'maxFileSize' => 2048,
                )
            )
        )*/
    ),
);
