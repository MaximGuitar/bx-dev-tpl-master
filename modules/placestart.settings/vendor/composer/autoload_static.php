<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e5b23cff3c5ce2becab17e88e479558
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'P' => 
        array (
            'Placestart\\' => 11,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'K' => 
        array (
            'Kint\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Placestart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e5b23cff3c5ce2becab17e88e479558::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e5b23cff3c5ce2becab17e88e479558::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e5b23cff3c5ce2becab17e88e479558::$classMap;

        }, null, ClassLoader::class);
    }
}
