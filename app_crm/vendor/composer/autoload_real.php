<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f
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

        spl_autoload_register(array('ComposerAutoloaderInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
