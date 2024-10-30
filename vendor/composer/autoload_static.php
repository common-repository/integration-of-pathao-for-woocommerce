<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf4637f91d7b1efab28fab09d6447a6c
{
    public static $files = array (
        'ea5a3117e33cc89371a712c6f00ed56d' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SpringDevs\\Pathao\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SpringDevs\\Pathao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf4637f91d7b1efab28fab09d6447a6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf4637f91d7b1efab28fab09d6447a6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf4637f91d7b1efab28fab09d6447a6c::$classMap;

        }, null, ClassLoader::class);
    }
}
