<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c085ecf283f04f9dd1203a703e59ae0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c085ecf283f04f9dd1203a703e59ae0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c085ecf283f04f9dd1203a703e59ae0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
