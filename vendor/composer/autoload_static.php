<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4e3d8c8586713d71e95307ee0b0b551
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4e3d8c8586713d71e95307ee0b0b551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4e3d8c8586713d71e95307ee0b0b551::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf4e3d8c8586713d71e95307ee0b0b551::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
