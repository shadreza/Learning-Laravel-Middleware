<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // after getting the req
        // we redirect to the root
        return redirect('/');

                                        // ^
                                        // |    before the request
                                        // |

        // then we do the next req
        return $next($request);         // this is the request

                                        // |
                                        // |    after the request [response]
                                        // ⌄


    }
}
