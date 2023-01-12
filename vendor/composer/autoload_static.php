<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf63f1466eee22aa00f421d506d7ae1bc
{
    public static $files = array (
        '146f9389042ccddbbff42b2b6d5f043e' => __DIR__ . '/..' . '/benlumia007/backdrop-template-helpers/src/functions-helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Backdrop\\Tools\\' => 15,
            'Backdrop\\Template\\View\\' => 23,
            'Backdrop\\Template\\Helpers\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Backdrop\\Tools\\' => 
        array (
            0 => __DIR__ . '/..' . '/benlumia007/backdrop-tools/src',
        ),
        'Backdrop\\Template\\View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Backdrop\\Template\\Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/benlumia007/backdrop-template-helpers/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf63f1466eee22aa00f421d506d7ae1bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf63f1466eee22aa00f421d506d7ae1bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf63f1466eee22aa00f421d506d7ae1bc::$classMap;

        }, null, ClassLoader::class);
    }
}
