<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd228b6db5e642a467025110717ee1d7
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift' => 
            array (
                0 => __DIR__ . '/..' . '/apache/thrift/lib/php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfd228b6db5e642a467025110717ee1d7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}