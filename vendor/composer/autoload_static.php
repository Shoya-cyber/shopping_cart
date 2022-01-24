<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c7b823f690dc7eb1ea7e5790fdb2cc9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c7b823f690dc7eb1ea7e5790fdb2cc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c7b823f690dc7eb1ea7e5790fdb2cc9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c7b823f690dc7eb1ea7e5790fdb2cc9::$classMap;

        }, null, ClassLoader::class);
    }
}
