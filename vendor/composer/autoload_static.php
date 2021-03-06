<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2039c1f14e7d9aca2ef9bc2c7837b7ae
{
    public static $classMap = array (
        'DB' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'DBHelper' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'DBTransaction' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'MeekroDB' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'MeekroDBEval' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'MeekroDBException' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
        'WhereClause' => __DIR__ . '/..' . '/SergeyTsalkov/meekrodb/db.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2039c1f14e7d9aca2ef9bc2c7837b7ae::$classMap;

        }, null, ClassLoader::class);
    }
}
