<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e1d8022a8fdfeef030040a348ddb5d6
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e1d8022a8fdfeef030040a348ddb5d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e1d8022a8fdfeef030040a348ddb5d6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e1d8022a8fdfeef030040a348ddb5d6::$classMap;

        }, null, ClassLoader::class);
    }
}
