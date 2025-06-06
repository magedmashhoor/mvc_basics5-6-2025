<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ed44be4e925e816c4d70f9d20c548fa
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/src/Controllers/UserController.php',
        'App\\Models\\Users' => __DIR__ . '/../..' . '/src/Models/Users.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Core\\Database\\DB' => __DIR__ . '/../..' . '/core/Database/DB.php',
        'Core\\View\\View' => __DIR__ . '/../..' . '/core/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ed44be4e925e816c4d70f9d20c548fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ed44be4e925e816c4d70f9d20c548fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ed44be4e925e816c4d70f9d20c548fa::$classMap;

        }, null, ClassLoader::class);
    }
}
