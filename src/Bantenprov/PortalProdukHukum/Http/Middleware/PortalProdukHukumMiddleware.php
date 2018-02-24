<?php namespace Bantenprov\PortalProdukHukum\Http\Middleware;

use Closure;

/**
 * The PortalProdukHukumMiddleware class.
 *
 * @package Bantenprov\PortalProdukHukum
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalProdukHukumMiddleware
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
        return $next($request);
    }
}
