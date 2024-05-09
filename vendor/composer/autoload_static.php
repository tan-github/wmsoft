<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50cc4e27e90e2417b68da5b8fb8a312e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Zsywm\\Wmsoft\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zsywm\\Wmsoft\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit50cc4e27e90e2417b68da5b8fb8a312e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50cc4e27e90e2417b68da5b8fb8a312e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50cc4e27e90e2417b68da5b8fb8a312e::$classMap;

        }, null, ClassLoader::class);
    }
}
