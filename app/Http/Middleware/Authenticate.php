<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request, $route)
    {
        if (! $request->expectsJson()) {
            return $route;
        }
    }

    protected function unauthenticated($request, array $guards)
    {
        $route = '';

        if($guards[0] == 'admin'){
            $route = route('admin.login');
        }elseif ($guards[0] == 'medecin') {
            $route = route('medecin.login');
        }elseif($guards[0] == 'responsable'){
            $route = route('responsable.login');
        }elseif($guards[0] == 'patient'){
            $route = route('patient.login');
        }

        throw new AuthenticationException(
            'Unauthenticated.', $guards, $this->redirectTo($request, $route)
        );
    }
}
