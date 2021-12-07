<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Patient;

class ConfirmPhonePatient
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
        $patient = auth('patient')->user();

        if($patient->phone_verification_token != null) return redirect()->route('patient.confirm.tampon');

        return $next($request);
    }
}
