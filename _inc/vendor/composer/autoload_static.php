<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit996bb2a91cd113c5a1aba5f036481431
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit996bb2a91cd113c5a1aba5f036481431::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit996bb2a91cd113c5a1aba5f036481431::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit996bb2a91cd113c5a1aba5f036481431::$classMap;

        }, null, ClassLoader::class);
    }
}