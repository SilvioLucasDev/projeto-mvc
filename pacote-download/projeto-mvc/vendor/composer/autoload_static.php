<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66b9aa29aca1ca67c406cd3bd3ebf507
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'H' => 
        array (
            'Helper\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Helper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts/Models/helper',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66b9aa29aca1ca67c406cd3bd3ebf507::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66b9aa29aca1ca67c406cd3bd3ebf507::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66b9aa29aca1ca67c406cd3bd3ebf507::$classMap;

        }, null, ClassLoader::class);
    }
}
