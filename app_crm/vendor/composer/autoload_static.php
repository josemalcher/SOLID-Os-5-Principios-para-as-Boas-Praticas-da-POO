<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ccc9e7ed3d4ec6f69a4e6d21cd92b9f::$classMap;

        }, null, ClassLoader::class);
    }
}