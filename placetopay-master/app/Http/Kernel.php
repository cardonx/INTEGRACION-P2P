<?php

namespace App\Http;

use Integracion\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Integracion\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Integracion\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Integracion\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Integracion\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Integracion\Session\Middleware\StartSession::class,
            // \Integracion\Session\Middleware\AuthenticateSession::class,
            \Integracion\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Integracion\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Integracion\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Integracion\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Integracion\Routing\Middleware\SubstituteBindings::class,
        'can' => \Integracion\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Integracion\Routing\Middleware\ThrottleRequests::class,
    ];
}
