<?php namespace Bantenprov\PortalProdukHukum\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The PortalProdukHukum facade.
 *
 * @package Bantenprov\PortalProdukHukum
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalProdukHukum extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'portal-produk-hukum';
    }
}
