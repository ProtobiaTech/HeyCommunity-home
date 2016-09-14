<?php

namespace App\Http\Middleware;

use Closure;

use Auth;
use Landlord;

class TenantDataFilter
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

        $Tenant = Auth::user();
        Landlord::addTenant('tenant_id', $Tenant->id);

        return $next($request);
    }
}
