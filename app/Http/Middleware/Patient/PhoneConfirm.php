<?php

namespace App\Http\Middleware\Patient;

use Closure;
use App\Models\Patient;

class PhoneConfirm
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
        /** @var Patient $patient */
        $patient = $request->user();

        if(!$patient->hasValidPhone()) return redirect()->route('patient.confirm.tampon');

        return $next($request);
    }
}
