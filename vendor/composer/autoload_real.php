<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit50cc4e27e90e2417b68da5b8fb8a312e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit50cc4e27e90e2417b68da5b8fb8a312e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit50cc4e27e90e2417b68da5b8fb8a312e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit50cc4e27e90e2417b68da5b8fb8a312e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
