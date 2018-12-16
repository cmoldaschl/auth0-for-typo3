<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Auth0\\SDK\\API\\Authentication' => $vendorDir . '/auth0/auth0-php/src/API/Authentication.php',
    'Auth0\\SDK\\API\\Header\\Authorization\\AuthorizationBearer' => $vendorDir . '/auth0/auth0-php/src/API/Header/Authorization/AuthorizationBearer.php',
    'Auth0\\SDK\\API\\Header\\ContentType' => $vendorDir . '/auth0/auth0-php/src/API/Header/ContentType.php',
    'Auth0\\SDK\\API\\Header\\Header' => $vendorDir . '/auth0/auth0-php/src/API/Header/Header.php',
    'Auth0\\SDK\\API\\Helpers\\ApiClient' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/ApiClient.php',
    'Auth0\\SDK\\API\\Helpers\\InformationHeaders' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/InformationHeaders.php',
    'Auth0\\SDK\\API\\Helpers\\RequestBuilder' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/RequestBuilder.php',
    'Auth0\\SDK\\API\\Helpers\\State\\DummyStateHandler' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/State/DummyStateHandler.php',
    'Auth0\\SDK\\API\\Helpers\\State\\SessionStateHandler' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/State/SessionStateHandler.php',
    'Auth0\\SDK\\API\\Helpers\\State\\StateHandler' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/State/StateHandler.php',
    'Auth0\\SDK\\API\\Helpers\\TokenGenerator' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/TokenGenerator.php',
    'Auth0\\SDK\\API\\Management' => $vendorDir . '/auth0/auth0-php/src/API/Management.php',
    'Auth0\\SDK\\API\\Management\\Blacklists' => $vendorDir . '/auth0/auth0-php/src/API/Management/Blacklists.php',
    'Auth0\\SDK\\API\\Management\\ClientGrants' => $vendorDir . '/auth0/auth0-php/src/API/Management/ClientGrants.php',
    'Auth0\\SDK\\API\\Management\\Clients' => $vendorDir . '/auth0/auth0-php/src/API/Management/Clients.php',
    'Auth0\\SDK\\API\\Management\\Connections' => $vendorDir . '/auth0/auth0-php/src/API/Management/Connections.php',
    'Auth0\\SDK\\API\\Management\\DeviceCredentials' => $vendorDir . '/auth0/auth0-php/src/API/Management/DeviceCredentials.php',
    'Auth0\\SDK\\API\\Management\\EmailTemplates' => $vendorDir . '/auth0/auth0-php/src/API/Management/EmailTemplates.php',
    'Auth0\\SDK\\API\\Management\\Emails' => $vendorDir . '/auth0/auth0-php/src/API/Management/Emails.php',
    'Auth0\\SDK\\API\\Management\\GenericResource' => $vendorDir . '/auth0/auth0-php/src/API/Management/GenericResource.php',
    'Auth0\\SDK\\API\\Management\\Jobs' => $vendorDir . '/auth0/auth0-php/src/API/Management/Jobs.php',
    'Auth0\\SDK\\API\\Management\\Logs' => $vendorDir . '/auth0/auth0-php/src/API/Management/Logs.php',
    'Auth0\\SDK\\API\\Management\\ResourceServers' => $vendorDir . '/auth0/auth0-php/src/API/Management/ResourceServers.php',
    'Auth0\\SDK\\API\\Management\\Rules' => $vendorDir . '/auth0/auth0-php/src/API/Management/Rules.php',
    'Auth0\\SDK\\API\\Management\\Stats' => $vendorDir . '/auth0/auth0-php/src/API/Management/Stats.php',
    'Auth0\\SDK\\API\\Management\\Tenants' => $vendorDir . '/auth0/auth0-php/src/API/Management/Tenants.php',
    'Auth0\\SDK\\API\\Management\\Tickets' => $vendorDir . '/auth0/auth0-php/src/API/Management/Tickets.php',
    'Auth0\\SDK\\API\\Management\\UserBlocks' => $vendorDir . '/auth0/auth0-php/src/API/Management/UserBlocks.php',
    'Auth0\\SDK\\API\\Management\\Users' => $vendorDir . '/auth0/auth0-php/src/API/Management/Users.php',
    'Auth0\\SDK\\API\\Management\\UsersByEmail' => $vendorDir . '/auth0/auth0-php/src/API/Management/UsersByEmail.php',
    'Auth0\\SDK\\API\\Oauth2Client' => $vendorDir . '/auth0/auth0-php/src/API/Oauth2Client.php',
    'Auth0\\SDK\\Auth0' => $vendorDir . '/auth0/auth0-php/src/Auth0.php',
    'Auth0\\SDK\\Auth0Api' => $vendorDir . '/auth0/auth0-php/src/Auth0Api.php',
    'Auth0\\SDK\\Auth0AuthApi' => $vendorDir . '/auth0/auth0-php/src/Auth0AuthApi.php',
    'Auth0\\SDK\\Auth0JWT' => $vendorDir . '/auth0/auth0-php/src/Auth0JWT.php',
    'Auth0\\SDK\\Exception\\ApiException' => $vendorDir . '/auth0/auth0-php/src/Exception/ApiException.php',
    'Auth0\\SDK\\Exception\\CoreException' => $vendorDir . '/auth0/auth0-php/src/Exception/CoreException.php',
    'Auth0\\SDK\\Exception\\InvalidTokenException' => $vendorDir . '/auth0/auth0-php/src/Exception/InvalidTokenException.php',
    'Auth0\\SDK\\Helpers\\Cache\\CacheHandler' => $vendorDir . '/auth0/auth0-php/src/Helpers/Cache/CacheHandler.php',
    'Auth0\\SDK\\Helpers\\Cache\\FileSystemCacheHandler' => $vendorDir . '/auth0/auth0-php/src/Helpers/Cache/FileSystemCacheHandler.php',
    'Auth0\\SDK\\Helpers\\Cache\\NoCacheHandler' => $vendorDir . '/auth0/auth0-php/src/Helpers/Cache/NoCacheHandler.php',
    'Auth0\\SDK\\Helpers\\JWKFetcher' => $vendorDir . '/auth0/auth0-php/src/Helpers/JWKFetcher.php',
    'Auth0\\SDK\\JWTVerifier' => $vendorDir . '/auth0/auth0-php/src/JWTVerifier.php',
    'Auth0\\SDK\\Store\\EmptyStore' => $vendorDir . '/auth0/auth0-php/src/Store/EmptyStore.php',
    'Auth0\\SDK\\Store\\SessionStore' => $vendorDir . '/auth0/auth0-php/src/Store/SessionStore.php',
    'Auth0\\SDK\\Store\\StoreInterface' => $vendorDir . '/auth0/auth0-php/src/Store/StoreInterface.php',
    'Firebase\\JWT\\BeforeValidException' => $vendorDir . '/firebase/php-jwt/src/BeforeValidException.php',
    'Firebase\\JWT\\ExpiredException' => $vendorDir . '/firebase/php-jwt/src/ExpiredException.php',
    'Firebase\\JWT\\JWT' => $vendorDir . '/firebase/php-jwt/src/JWT.php',
    'Firebase\\JWT\\SignatureInvalidException' => $vendorDir . '/firebase/php-jwt/src/SignatureInvalidException.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\UriTemplate' => $vendorDir . '/guzzlehttp/guzzle/src/UriTemplate.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
);
