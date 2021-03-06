<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47d0ad702528ed0c6c35f4de8a71cf4b
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'EnviarEmail' => __DIR__ . '/../..' . '/model/EnviarEmail.class.php',
        'Login' => __DIR__ . '/../..' . '/model/Login.class.php',
        'Markers' => __DIR__ . '/../..' . '/model/Markers.class.php',
        'Oficina' => __DIR__ . '/../..' . '/model/Oficina.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'Servicos' => __DIR__ . '/../..' . '/model/Servicos.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47d0ad702528ed0c6c35f4de8a71cf4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47d0ad702528ed0c6c35f4de8a71cf4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47d0ad702528ed0c6c35f4de8a71cf4b::$classMap;

        }, null, ClassLoader::class);
    }
}
