<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\testMiddleware;
use App\Http\Middleware\testMiddleware2;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'Test1'=>testmiddleware::class,
            'Test2'=>testmiddleware2::class
        ]);
        $middleware->group('Test',[
            'Test1', 'Test2'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
