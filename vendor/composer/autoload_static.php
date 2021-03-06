<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit779aaf83a5ca5a0c0a36dc3c9c493bdf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit779aaf83a5ca5a0c0a36dc3c9c493bdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit779aaf83a5ca5a0c0a36dc3c9c493bdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit779aaf83a5ca5a0c0a36dc3c9c493bdf::$classMap;

        }, null, ClassLoader::class);
    }
}
