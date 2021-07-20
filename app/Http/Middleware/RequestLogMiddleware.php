<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class RequestLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $uuid = \Str::uuid();
        \Log::info('Request {' . $uuid . '} :' . Carbon::now()->toDayDateTimeString());
        \Log::info("Reaquest header", $request->headers->all());
        \Log::info("Reaquest Payload", $request->all());

        $response = $next($request);

        \Log::info('Response {' . $uuid . '} :' . Carbon::now()->toDayDateTimeString());

        return $response;
    }
}
