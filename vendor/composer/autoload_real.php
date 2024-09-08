<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc59567acd647ded10a45a2b5bdbfd8b9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc59567acd647ded10a45a2b5bdbfd8b9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc59567acd647ded10a45a2b5bdbfd8b9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc59567acd647ded10a45a2b5bdbfd8b9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
