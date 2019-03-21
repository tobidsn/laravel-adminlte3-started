<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class HasAnyRole
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
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
    public function handle($request, Closure $next, ...$roles)
    {
        // Return Not Authorized error, if user has not logged in
        if (!$this->auth->check()) {
            return redirect('magic/login');
        }

        foreach ($roles as $role) {
            // if user has given role, continue processing the request
            if ($this->auth->user()->hasRole($role)) {
                return $next($request);
            }
        }
        // user didn't have any of required roles, return Forbidden error
        abort(403);
    }
}
