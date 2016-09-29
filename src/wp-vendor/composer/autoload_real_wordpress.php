<?php

// autoload_real_wordpress.php generated by schlessera/composer-wp-autoload

class ComposerAutoloaderInitWPd02c56a2fedd820876e05ce9580b834e {
	private static $loader;

	public static function loadClassLoader($class) {
		if ('WordPress_Composer_ClassLoader' === $class) {
			require dirname(__FILE__).'/ClassLoaderWordPress.php';
		}
	}

	/**
	 * @return WordPress_Composer_ClassLoader
	 */
	public static function getLoader() {
		if (null !== self::$loader) {
			return self::$loader;
		}

		spl_autoload_register(array('ComposerAutoloaderInitWPd02c56a2fedd820876e05ce9580b834e', 'loadClassLoader'), true /*, true */);
		self::$loader = $loader = new WordPress_Composer_ClassLoader();
		spl_autoload_unregister(array('ComposerAutoloaderInitWPd02c56a2fedd820876e05ce9580b834e', 'loadClassLoader'));

		$vendorDir = dirname(dirname(__FILE__));
		$baseDir   = ABSPATH;
		$dir       = dirname(__FILE__);

		$map = require $dir.'/autoload_namespaces.php';
		foreach ($map as $namespace => $path) {
			$loader->add($namespace, $path);
		}

		$classMap = require $dir.'/autoload_classmap_wordpress.php';
		if ($classMap) {
			$loader->addClassMap($classMap);
		}

		$loader->register(true);

		return $loader;
	}
}
