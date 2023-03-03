<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30b1432825bff64caef19a5c1eb708b4
{
    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'OAuth2' => 
            array (
                0 => __DIR__ . '/..' . '/bshaffer/oauth2-server-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit30b1432825bff64caef19a5c1eb708b4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit30b1432825bff64caef19a5c1eb708b4::$classMap;

        }, null, ClassLoader::class);
    }
}