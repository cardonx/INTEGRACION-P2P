<?php

namespace App\Exceptions;

use Exception;
use Integracion\Auth\AuthenticationException;
use Integracion\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Integracion\Auth\AuthenticationException::class,
        \Integracion\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Integracion\Database\Eloquent\ModelNotFoundException::class,
        \Integracion\Session\TokenMismatchException::class,
        \Integracion\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Integracion\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Integracion\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Integracion\Http\Request  $request
     * @param  \Integracion\Auth\AuthenticationException  $exception
     * @return \Integracion\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
