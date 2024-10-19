<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfad5e85b7ee92c9e4c5b92fd81498ff
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfad5e85b7ee92c9e4c5b92fd81498ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfad5e85b7ee92c9e4c5b92fd81498ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfad5e85b7ee92c9e4c5b92fd81498ff::$classMap;

        }, null, ClassLoader::class);
    }
}
