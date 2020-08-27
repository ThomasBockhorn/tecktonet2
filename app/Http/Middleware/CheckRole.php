<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class CheckRole
{

    /**
     * Guard implementation
     */
    protected $auth;


    /**
     * Create a guard instance
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->role == 'admin') {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}