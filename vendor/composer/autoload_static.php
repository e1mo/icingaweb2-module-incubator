<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ef7d195fb3db1936ba6ea96886587df
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'gipfl\\Translation\\' => 18,
            'gipfl\\SystemD\\' => 14,
            'gipfl\\Protocol\\NetString\\' => 25,
            'gipfl\\Protocol\\JsonRpc\\' => 23,
            'gipfl\\Protocol\\Generic\\' => 23,
            'gipfl\\Protocol\\Exception\\' => 25,
            'gipfl\\LinuxHealth\\' => 18,
            'gipfl\\IcingaWeb2\\' => 17,
            'gipfl\\IcingaCliDaemon\\' => 22,
            'gipfl\\Cli\\' => 10,
            'gipfl\\Calendar\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'gipfl\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/translation/src',
        ),
        'gipfl\\SystemD\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/systemd/src',
        ),
        'gipfl\\Protocol\\NetString\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol-netstring/src',
        ),
        'gipfl\\Protocol\\JsonRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol-jsonrpc/src',
        ),
        'gipfl\\Protocol\\Generic\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol/src/Generic',
        ),
        'gipfl\\Protocol\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol/src/Exception',
        ),
        'gipfl\\LinuxHealth\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/linux-health/src',
        ),
        'gipfl\\IcingaWeb2\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/icingaweb2/src',
        ),
        'gipfl\\IcingaCliDaemon\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/icinga-cli-daemon/src',
        ),
        'gipfl\\Cli\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/cli/src',
        ),
        'gipfl\\Calendar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/calendar/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ef7d195fb3db1936ba6ea96886587df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ef7d195fb3db1936ba6ea96886587df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
