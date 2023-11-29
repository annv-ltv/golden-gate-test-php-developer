<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit34b5b7097d7be49a2f32ef79100cb5e2
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

        spl_autoload_register(array('ComposerAutoloaderInit34b5b7097d7be49a2f32ef79100cb5e2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit34b5b7097d7be49a2f32ef79100cb5e2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit34b5b7097d7be49a2f32ef79100cb5e2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
