<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce1070e207a8274b1aa8d04f4e6151cb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce1070e207a8274b1aa8d04f4e6151cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce1070e207a8274b1aa8d04f4e6151cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce1070e207a8274b1aa8d04f4e6151cb::$classMap;

        }, null, ClassLoader::class);
    }
}