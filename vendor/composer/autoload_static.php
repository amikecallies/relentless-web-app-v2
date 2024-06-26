<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03b541de4e2a97750b19699a778b7b3e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit03b541de4e2a97750b19699a778b7b3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03b541de4e2a97750b19699a778b7b3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03b541de4e2a97750b19699a778b7b3e::$classMap;

        }, null, ClassLoader::class);
    }
}
