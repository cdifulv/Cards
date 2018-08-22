<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc2852ddb6ef655a87b1d136d957dbc2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Difulv\\Cards\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Difulv\\Cards\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc2852ddb6ef655a87b1d136d957dbc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc2852ddb6ef655a87b1d136d957dbc2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
