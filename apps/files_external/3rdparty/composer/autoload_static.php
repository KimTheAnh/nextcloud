<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Icewind\\Streams\\' => 16,
            'Icewind\\SMB\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Icewind\\Streams\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/streams/src',
        ),
        'Icewind\\SMB\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/smb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Icewind\\SMB\\ACL' => __DIR__ . '/..' . '/icewind/smb/src/ACL.php',
        'Icewind\\SMB\\AbstractServer' => __DIR__ . '/..' . '/icewind/smb/src/AbstractServer.php',
        'Icewind\\SMB\\AbstractShare' => __DIR__ . '/..' . '/icewind/smb/src/AbstractShare.php',
        'Icewind\\SMB\\AnonymousAuth' => __DIR__ . '/..' . '/icewind/smb/src/AnonymousAuth.php',
        'Icewind\\SMB\\BasicAuth' => __DIR__ . '/..' . '/icewind/smb/src/BasicAuth.php',
        'Icewind\\SMB\\Change' => __DIR__ . '/..' . '/icewind/smb/src/Change.php',
        'Icewind\\SMB\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AccessDeniedException.php',
        'Icewind\\SMB\\Exception\\AlreadyExistsException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AlreadyExistsException.php',
        'Icewind\\SMB\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AuthenticationException.php',
        'Icewind\\SMB\\Exception\\ConnectException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectException.php',
        'Icewind\\SMB\\Exception\\ConnectionAbortedException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionAbortedException.php',
        'Icewind\\SMB\\Exception\\ConnectionException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionException.php',
        'Icewind\\SMB\\Exception\\ConnectionRefusedException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionRefusedException.php',
        'Icewind\\SMB\\Exception\\ConnectionResetException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionResetException.php',
        'Icewind\\SMB\\Exception\\DependencyException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/DependencyException.php',
        'Icewind\\SMB\\Exception\\Exception' => __DIR__ . '/..' . '/icewind/smb/src/Exception/Exception.php',
        'Icewind\\SMB\\Exception\\FileInUseException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/FileInUseException.php',
        'Icewind\\SMB\\Exception\\ForbiddenException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ForbiddenException.php',
        'Icewind\\SMB\\Exception\\HostDownException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/HostDownException.php',
        'Icewind\\SMB\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidArgumentException.php',
        'Icewind\\SMB\\Exception\\InvalidHostException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidHostException.php',
        'Icewind\\SMB\\Exception\\InvalidParameterException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidParameterException.php',
        'Icewind\\SMB\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidPathException.php',
        'Icewind\\SMB\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidRequestException.php',
        'Icewind\\SMB\\Exception\\InvalidResourceException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidResourceException.php',
        'Icewind\\SMB\\Exception\\InvalidTypeException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidTypeException.php',
        'Icewind\\SMB\\Exception\\NoLoginServerException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NoLoginServerException.php',
        'Icewind\\SMB\\Exception\\NoRouteToHostException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NoRouteToHostException.php',
        'Icewind\\SMB\\Exception\\NotEmptyException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NotEmptyException.php',
        'Icewind\\SMB\\Exception\\NotFoundException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NotFoundException.php',
        'Icewind\\SMB\\Exception\\OutOfSpaceException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/OutOfSpaceException.php',
        'Icewind\\SMB\\Exception\\RevisionMismatchException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/RevisionMismatchException.php',
        'Icewind\\SMB\\Exception\\TimedOutException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/TimedOutException.php',
        'Icewind\\SMB\\IAuth' => __DIR__ . '/..' . '/icewind/smb/src/IAuth.php',
        'Icewind\\SMB\\IFileInfo' => __DIR__ . '/..' . '/icewind/smb/src/IFileInfo.php',
        'Icewind\\SMB\\INotifyHandler' => __DIR__ . '/..' . '/icewind/smb/src/INotifyHandler.php',
        'Icewind\\SMB\\IOptions' => __DIR__ . '/..' . '/icewind/smb/src/IOptions.php',
        'Icewind\\SMB\\IServer' => __DIR__ . '/..' . '/icewind/smb/src/IServer.php',
        'Icewind\\SMB\\IShare' => __DIR__ . '/..' . '/icewind/smb/src/IShare.php',
        'Icewind\\SMB\\ISystem' => __DIR__ . '/..' . '/icewind/smb/src/ISystem.php',
        'Icewind\\SMB\\ITimeZoneProvider' => __DIR__ . '/..' . '/icewind/smb/src/ITimeZoneProvider.php',
        'Icewind\\SMB\\KerberosApacheAuth' => __DIR__ . '/..' . '/icewind/smb/src/KerberosApacheAuth.php',
        'Icewind\\SMB\\KerberosAuth' => __DIR__ . '/..' . '/icewind/smb/src/KerberosAuth.php',
        'Icewind\\SMB\\Native\\NativeFileInfo' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeFileInfo.php',
        'Icewind\\SMB\\Native\\NativeReadStream' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeReadStream.php',
        'Icewind\\SMB\\Native\\NativeServer' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeServer.php',
        'Icewind\\SMB\\Native\\NativeShare' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeShare.php',
        'Icewind\\SMB\\Native\\NativeState' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeState.php',
        'Icewind\\SMB\\Native\\NativeStream' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeStream.php',
        'Icewind\\SMB\\Native\\NativeWriteStream' => __DIR__ . '/..' . '/icewind/smb/src/Native/NativeWriteStream.php',
        'Icewind\\SMB\\Options' => __DIR__ . '/..' . '/icewind/smb/src/Options.php',
        'Icewind\\SMB\\ServerFactory' => __DIR__ . '/..' . '/icewind/smb/src/ServerFactory.php',
        'Icewind\\SMB\\StringBuffer' => __DIR__ . '/..' . '/icewind/smb/src/StringBuffer.php',
        'Icewind\\SMB\\System' => __DIR__ . '/..' . '/icewind/smb/src/System.php',
        'Icewind\\SMB\\TimeZoneProvider' => __DIR__ . '/..' . '/icewind/smb/src/TimeZoneProvider.php',
        'Icewind\\SMB\\Wrapped\\Connection' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/Connection.php',
        'Icewind\\SMB\\Wrapped\\ErrorCodes' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/ErrorCodes.php',
        'Icewind\\SMB\\Wrapped\\FileInfo' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/FileInfo.php',
        'Icewind\\SMB\\Wrapped\\NotifyHandler' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/NotifyHandler.php',
        'Icewind\\SMB\\Wrapped\\Parser' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/Parser.php',
        'Icewind\\SMB\\Wrapped\\RawConnection' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/RawConnection.php',
        'Icewind\\SMB\\Wrapped\\Server' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/Server.php',
        'Icewind\\SMB\\Wrapped\\Share' => __DIR__ . '/..' . '/icewind/smb/src/Wrapped/Share.php',
        'Icewind\\Streams\\CallbackWrapper' => __DIR__ . '/..' . '/icewind/streams/src/CallbackWrapper.php',
        'Icewind\\Streams\\CountWrapper' => __DIR__ . '/..' . '/icewind/streams/src/CountWrapper.php',
        'Icewind\\Streams\\Directory' => __DIR__ . '/..' . '/icewind/streams/src/Directory.php',
        'Icewind\\Streams\\DirectoryFilter' => __DIR__ . '/..' . '/icewind/streams/src/DirectoryFilter.php',
        'Icewind\\Streams\\DirectoryWrapper' => __DIR__ . '/..' . '/icewind/streams/src/DirectoryWrapper.php',
        'Icewind\\Streams\\File' => __DIR__ . '/..' . '/icewind/streams/src/File.php',
        'Icewind\\Streams\\HashWrapper' => __DIR__ . '/..' . '/icewind/streams/src/HashWrapper.php',
        'Icewind\\Streams\\IteratorDirectory' => __DIR__ . '/..' . '/icewind/streams/src/IteratorDirectory.php',
        'Icewind\\Streams\\NullWrapper' => __DIR__ . '/..' . '/icewind/streams/src/NullWrapper.php',
        'Icewind\\Streams\\Path' => __DIR__ . '/..' . '/icewind/streams/src/Path.php',
        'Icewind\\Streams\\PathWrapper' => __DIR__ . '/..' . '/icewind/streams/src/PathWrapper.php',
        'Icewind\\Streams\\ReadHashWrapper' => __DIR__ . '/..' . '/icewind/streams/src/ReadHashWrapper.php',
        'Icewind\\Streams\\RetryWrapper' => __DIR__ . '/..' . '/icewind/streams/src/RetryWrapper.php',
        'Icewind\\Streams\\SeekableWrapper' => __DIR__ . '/..' . '/icewind/streams/src/SeekableWrapper.php',
        'Icewind\\Streams\\Url' => __DIR__ . '/..' . '/icewind/streams/src/Url.php',
        'Icewind\\Streams\\UrlCallback' => __DIR__ . '/..' . '/icewind/streams/src/UrlCallback.php',
        'Icewind\\Streams\\Wrapper' => __DIR__ . '/..' . '/icewind/streams/src/Wrapper.php',
        'Icewind\\Streams\\WrapperHandler' => __DIR__ . '/..' . '/icewind/streams/src/WrapperHandler.php',
        'Icewind\\Streams\\WriteHashWrapper' => __DIR__ . '/..' . '/icewind/streams/src/WriteHashWrapper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$classMap;

        }, null, ClassLoader::class);
    }
}
