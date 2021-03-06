<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92ebd9f7251d6850f617dc5f1a7ec2a2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92ebd9f7251d6850f617dc5f1a7ec2a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92ebd9f7251d6850f617dc5f1a7ec2a2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
