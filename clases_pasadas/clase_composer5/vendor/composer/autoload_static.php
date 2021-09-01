<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b262348c1221458896e4e2bb8077970
{
    public static $files = array (
        '256cf83496e2099119b5c55307e4d30d' => __DIR__ . '/../..' . '/src/file1.php',
        'ac6c04ebade447383d9cf9b72ac2ead7' => __DIR__ . '/../..' . '/src/file2.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b262348c1221458896e4e2bb8077970::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b262348c1221458896e4e2bb8077970::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b262348c1221458896e4e2bb8077970::$classMap;

        }, null, ClassLoader::class);
    }
}
