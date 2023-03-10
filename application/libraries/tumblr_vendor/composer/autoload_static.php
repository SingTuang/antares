<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6944a3d4a2bcde492ec36b52487b351
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Tumblr\\API' => 
            array (
                0 => __DIR__ . '/..' . '/tumblr/tumblr/lib',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
        'E' => 
        array (
            'Eher\\OAuth' => 
            array (
                0 => __DIR__ . '/..' . '/eher/oauth/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6944a3d4a2bcde492ec36b52487b351::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6944a3d4a2bcde492ec36b52487b351::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc6944a3d4a2bcde492ec36b52487b351::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
