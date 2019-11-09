<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8794ca72eaf7440952b4a32961442321
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
    );

    public static $classMap = array (
        'Jumbojett\\OpenIDConnectClient' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
        'Jumbojett\\OpenIDConnectClientException' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
        'phpseclib\\Crypt\\AES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/AES.php',
        'phpseclib\\Crypt\\Base' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Base.php',
        'phpseclib\\Crypt\\Blowfish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Blowfish.php',
        'phpseclib\\Crypt\\DES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/DES.php',
        'phpseclib\\Crypt\\Hash' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Hash.php',
        'phpseclib\\Crypt\\RC2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC2.php',
        'phpseclib\\Crypt\\RC4' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC4.php',
        'phpseclib\\Crypt\\RSA' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RSA.php',
        'phpseclib\\Crypt\\Random' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
        'phpseclib\\Crypt\\Rijndael' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Rijndael.php',
        'phpseclib\\Crypt\\TripleDES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/TripleDES.php',
        'phpseclib\\Crypt\\Twofish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Twofish.php',
        'phpseclib\\File\\ANSI' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ANSI.php',
        'phpseclib\\File\\ASN1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1.php',
        'phpseclib\\File\\ASN1\\Element' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1/Element.php',
        'phpseclib\\File\\X509' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/X509.php',
        'phpseclib\\Math\\BigInteger' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Math/BigInteger.php',
        'phpseclib\\Net\\SCP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SCP.php',
        'phpseclib\\Net\\SFTP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP.php',
        'phpseclib\\Net\\SFTP\\Stream' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP/Stream.php',
        'phpseclib\\Net\\SSH1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH1.php',
        'phpseclib\\Net\\SSH2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH2.php',
        'phpseclib\\System\\SSH\\Agent' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent.php',
        'phpseclib\\System\\SSH\\Agent\\Identity' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent/Identity.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8794ca72eaf7440952b4a32961442321::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8794ca72eaf7440952b4a32961442321::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8794ca72eaf7440952b4a32961442321::$classMap;

        }, null, ClassLoader::class);
    }
}
