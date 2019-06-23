<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', true),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Integracion encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Integracion\Auth\AuthServiceProvider::class,
        Integracion\Broadcasting\BroadcastServiceProvider::class,
        Integracion\Bus\BusServiceProvider::class,
        Integracion\Cache\CacheServiceProvider::class,
        Integracion\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Integracion\Cookie\CookieServiceProvider::class,
        Integracion\Database\DatabaseServiceProvider::class,
        Integracion\Encryption\EncryptionServiceProvider::class,
        Integracion\Filesystem\FilesystemServiceProvider::class,
        Integracion\Foundation\Providers\FoundationServiceProvider::class,
        Integracion\Hashing\HashServiceProvider::class,
        Integracion\Mail\MailServiceProvider::class,
        Integracion\Notifications\NotificationServiceProvider::class,
        Integracion\Pagination\PaginationServiceProvider::class,
        Integracion\Pipeline\PipelineServiceProvider::class,
        Integracion\Queue\QueueServiceProvider::class,
        Integracion\Redis\RedisServiceProvider::class,
        Integracion\Auth\Passwords\PasswordResetServiceProvider::class,
        Integracion\Session\SessionServiceProvider::class,
        Integracion\Translation\TranslationServiceProvider::class,
        Integracion\Validation\ValidationServiceProvider::class,
        Integracion\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        Laravel\Tinker\TinkerServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Integracion\Support\Facades\App::class,
        'Artisan' => Integracion\Support\Facades\Artisan::class,
        'Auth' => Integracion\Support\Facades\Auth::class,
        'Blade' => Integracion\Support\Facades\Blade::class,
        'Broadcast' => Integracion\Support\Facades\Broadcast::class,
        'Bus' => Integracion\Support\Facades\Bus::class,
        'Cache' => Integracion\Support\Facades\Cache::class,
        'Config' => Integracion\Support\Facades\Config::class,
        'Cookie' => Integracion\Support\Facades\Cookie::class,
        'Crypt' => Integracion\Support\Facades\Crypt::class,
        'DB' => Integracion\Support\Facades\DB::class,
        'Eloquent' => Integracion\Database\Eloquent\Model::class,
        'Event' => Integracion\Support\Facades\Event::class,
        'File' => Integracion\Support\Facades\File::class,
        'Gate' => Integracion\Support\Facades\Gate::class,
        'Hash' => Integracion\Support\Facades\Hash::class,
        'Lang' => Integracion\Support\Facades\Lang::class,
        'Log' => Integracion\Support\Facades\Log::class,
        'Mail' => Integracion\Support\Facades\Mail::class,
        'Notification' => Integracion\Support\Facades\Notification::class,
        'Password' => Integracion\Support\Facades\Password::class,
        'Queue' => Integracion\Support\Facades\Queue::class,
        'Redirect' => Integracion\Support\Facades\Redirect::class,
        'Redis' => Integracion\Support\Facades\Redis::class,
        'Request' => Integracion\Support\Facades\Request::class,
        'Response' => Integracion\Support\Facades\Response::class,
        'Route' => Integracion\Support\Facades\Route::class,
        'Schema' => Integracion\Support\Facades\Schema::class,
        'Session' => Integracion\Support\Facades\Session::class,
        'Storage' => Integracion\Support\Facades\Storage::class,
        'URL' => Integracion\Support\Facades\URL::class,
        'Validator' => Integracion\Support\Facades\Validator::class,
        'View' => Integracion\Support\Facades\View::class,

    ],

];
