<?php

namespace App\Http\Middleware\Patient;

use Auth;
use Closure;
use App\Models\Patient;

class ActiveAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var Patient */
        $patient = $request->user();

        if(!$patient->is_active) {
            Auth::guard('patient')->logout();

            return redirect()->route('index')->with(['danger' => 'Désole votre compte n\'est pas activé']);
        }

        return $next($request);
    }
}
