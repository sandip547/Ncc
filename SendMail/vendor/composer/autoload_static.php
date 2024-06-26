<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb839bc24430e2339d11dc78651e73b05
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb839bc24430e2339d11dc78651e73b05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb839bc24430e2339d11dc78651e73b05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb839bc24430e2339d11dc78651e73b05::$classMap;

        }, null, ClassLoader::class);
    }
}
