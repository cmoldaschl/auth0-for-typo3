<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd064bfa049f3dcf6166ee81e13cb4e1
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'Auth0\\SDK\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Auth0\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/auth0/auth0-php/src',
        ),
    );

    public static $classMap = array (
        'Auth0\\SDK\\API\\Authentication' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Authentication.php',
        'Auth0\\SDK\\API\\Header\\Authorization\\AuthorizationBearer' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Header/Authorization/AuthorizationBearer.php',
        'Auth0\\SDK\\API\\Header\\ContentType' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Header/ContentType.php',
        'Auth0\\SDK\\API\\Header\\Header' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Header/Header.php',
        'Auth0\\SDK\\API\\Helpers\\ApiClient' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/ApiClient.php',
        'Auth0\\SDK\\API\\Helpers\\InformationHeaders' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/InformationHeaders.php',
        'Auth0\\SDK\\API\\Helpers\\RequestBuilder' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/RequestBuilder.php',
        'Auth0\\SDK\\API\\Helpers\\State\\DummyStateHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/State/DummyStateHandler.php',
        'Auth0\\SDK\\API\\Helpers\\State\\SessionStateHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/State/SessionStateHandler.php',
        'Auth0\\SDK\\API\\Helpers\\State\\StateHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/State/StateHandler.php',
        'Auth0\\SDK\\API\\Helpers\\TokenGenerator' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Helpers/TokenGenerator.php',
        'Auth0\\SDK\\API\\Management' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management.php',
        'Auth0\\SDK\\API\\Management\\Blacklists' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Blacklists.php',
        'Auth0\\SDK\\API\\Management\\ClientGrants' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/ClientGrants.php',
        'Auth0\\SDK\\API\\Management\\Clients' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Clients.php',
        'Auth0\\SDK\\API\\Management\\Connections' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Connections.php',
        'Auth0\\SDK\\API\\Management\\DeviceCredentials' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/DeviceCredentials.php',
        'Auth0\\SDK\\API\\Management\\EmailTemplates' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/EmailTemplates.php',
        'Auth0\\SDK\\API\\Management\\Emails' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Emails.php',
        'Auth0\\SDK\\API\\Management\\GenericResource' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/GenericResource.php',
        'Auth0\\SDK\\API\\Management\\Jobs' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Jobs.php',
        'Auth0\\SDK\\API\\Management\\Logs' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Logs.php',
        'Auth0\\SDK\\API\\Management\\ResourceServers' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/ResourceServers.php',
        'Auth0\\SDK\\API\\Management\\Rules' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Rules.php',
        'Auth0\\SDK\\API\\Management\\Stats' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Stats.php',
        'Auth0\\SDK\\API\\Management\\Tenants' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Tenants.php',
        'Auth0\\SDK\\API\\Management\\Tickets' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Tickets.php',
        'Auth0\\SDK\\API\\Management\\UserBlocks' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/UserBlocks.php',
        'Auth0\\SDK\\API\\Management\\Users' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/Users.php',
        'Auth0\\SDK\\API\\Management\\UsersByEmail' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Management/UsersByEmail.php',
        'Auth0\\SDK\\API\\Oauth2Client' => __DIR__ . '/..' . '/auth0/auth0-php/src/API/Oauth2Client.php',
        'Auth0\\SDK\\Auth0' => __DIR__ . '/..' . '/auth0/auth0-php/src/Auth0.php',
        'Auth0\\SDK\\Auth0Api' => __DIR__ . '/..' . '/auth0/auth0-php/src/Auth0Api.php',
        'Auth0\\SDK\\Auth0AuthApi' => __DIR__ . '/..' . '/auth0/auth0-php/src/Auth0AuthApi.php',
        'Auth0\\SDK\\Auth0JWT' => __DIR__ . '/..' . '/auth0/auth0-php/src/Auth0JWT.php',
        'Auth0\\SDK\\Exception\\ApiException' => __DIR__ . '/..' . '/auth0/auth0-php/src/Exception/ApiException.php',
        'Auth0\\SDK\\Exception\\CoreException' => __DIR__ . '/..' . '/auth0/auth0-php/src/Exception/CoreException.php',
        'Auth0\\SDK\\Exception\\InvalidTokenException' => __DIR__ . '/..' . '/auth0/auth0-php/src/Exception/InvalidTokenException.php',
        'Auth0\\SDK\\Helpers\\Cache\\CacheHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/Helpers/Cache/CacheHandler.php',
        'Auth0\\SDK\\Helpers\\Cache\\FileSystemCacheHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/Helpers/Cache/FileSystemCacheHandler.php',
        'Auth0\\SDK\\Helpers\\Cache\\NoCacheHandler' => __DIR__ . '/..' . '/auth0/auth0-php/src/Helpers/Cache/NoCacheHandler.php',
        'Auth0\\SDK\\Helpers\\JWKFetcher' => __DIR__ . '/..' . '/auth0/auth0-php/src/Helpers/JWKFetcher.php',
        'Auth0\\SDK\\JWTVerifier' => __DIR__ . '/..' . '/auth0/auth0-php/src/JWTVerifier.php',
        'Auth0\\SDK\\Store\\EmptyStore' => __DIR__ . '/..' . '/auth0/auth0-php/src/Store/EmptyStore.php',
        'Auth0\\SDK\\Store\\SessionStore' => __DIR__ . '/..' . '/auth0/auth0-php/src/Store/SessionStore.php',
        'Auth0\\SDK\\Store\\StoreInterface' => __DIR__ . '/..' . '/auth0/auth0-php/src/Store/StoreInterface.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd064bfa049f3dcf6166ee81e13cb4e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd064bfa049f3dcf6166ee81e13cb4e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd064bfa049f3dcf6166ee81e13cb4e1::$classMap;

        }, null, ClassLoader::class);
    }
}
