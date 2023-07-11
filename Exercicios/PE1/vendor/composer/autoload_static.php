<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfbc96d73474f8e322982d6ee3d9b4e4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfbc96d73474f8e322982d6ee3d9b4e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfbc96d73474f8e322982d6ee3d9b4e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfbc96d73474f8e322982d6ee3d9b4e4::$classMap;

        }, null, ClassLoader::class);
    }
}