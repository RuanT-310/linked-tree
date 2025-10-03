<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Só retorna JSON para rotas de API
        $exceptions->shouldRenderJsonWhen(function (Request $request) {
            return $request->is('api/*') || $request->expectsJson();
        });

        // Customiza APENAS as respostas JSON (não afeta HTML)
        $exceptions->render(function (Throwable $e, Request $request) {
            // Só customiza se for uma requisição que deve retornar JSON
            if ($request->is('api/*') || $request->expectsJson()) {
                $status = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 400;
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                    'type' => class_basename($e),
                    'status' => $status,
                ], $status);
            }
            
            // Para requisições normais, deixa o Laravel renderizar HTML normalmente
            return null;
        });
    })->create();
