<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf4980d13ded39b014162dc8f257bf66
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Stopwatch\\' => 28,
        ),
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
        'D' => 
        array (
            'Davaxi\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
        'Davaxi\\' => 
        array (
            0 => __DIR__ . '/..' . '/davaxi/sparkline/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf4980d13ded39b014162dc8f257bf66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf4980d13ded39b014162dc8f257bf66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
