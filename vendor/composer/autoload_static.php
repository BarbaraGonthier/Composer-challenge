<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97d20fef53166cb4e27bbca002d19e8a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97d20fef53166cb4e27bbca002d19e8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97d20fef53166cb4e27bbca002d19e8a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit97d20fef53166cb4e27bbca002d19e8a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
