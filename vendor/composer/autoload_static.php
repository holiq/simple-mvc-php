<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75019af4591a5d57c1a56d6aa07f8b9f
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75019af4591a5d57c1a56d6aa07f8b9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75019af4591a5d57c1a56d6aa07f8b9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75019af4591a5d57c1a56d6aa07f8b9f::$classMap;

        }, null, ClassLoader::class);
    }
}
