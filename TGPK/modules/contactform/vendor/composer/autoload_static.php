<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf1a7df8af3bf96f2f87355217a82272
{
    public static $files = array (
        'b45b351e6b6f7487d819961fef2fda77' => __DIR__ . '/..' . '/jakeasmith/http_build_url/src/http_build_url.php',
    );

    public static $classMap = array (
        'Contactform' => __DIR__ . '/../..' . '/contactform.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcf1a7df8af3bf96f2f87355217a82272::$classMap;

        }, null, ClassLoader::class);
    }
}