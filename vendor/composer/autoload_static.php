<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1798030ff62ec93eeab468f970388ff {
	public static $classMap = array(
		'FileStorage'            => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/Storage/FileStorage.php',
		'MemcacheStorage'        => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/Storage/MemcacheStorage.php',
		'MemcachedStorage'       => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/Storage/MemcachedStorage.php',
		'SendboxApi'           => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/sendbox.php',
		'SendboxApi_Interface' => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/sendboxInterface.php',
		'SessionStorage'         => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/Storage/SessionStorage.php',
		'TokenStorageInterface'  => __DIR__ . '/..' . '/sendbox/sendbox-rest-api-php/api/Storage/TokenStorageInterface.php',
		'WeDevs_Settings_API'    => __DIR__ . '/..' . '/tareq1988/wordpress-settings-api-class/src/class.settings-api.php',
	);

	public static function getInitializer( ClassLoader $loader ) {
		return \Closure::bind( function () use ( $loader ) {
			$loader->classMap = ComposerStaticInite1798030ff62ec93eeab468f970388ff::$classMap;

		}, null, ClassLoader::class );
	}
}
