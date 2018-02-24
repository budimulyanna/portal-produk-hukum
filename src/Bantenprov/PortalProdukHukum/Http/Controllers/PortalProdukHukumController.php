<?php namespace Bantenprov\PortalProdukHukum\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\PortalProdukHukum\Facades\PortalProdukHukum;
use Bantenprov\PortalProdukHukum\Models\PortalProdukHukumModel;

/**
 * The PortalProdukHukumController class.
 *
 * @package Bantenprov\PortalProdukHukum
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalProdukHukumController extends Controller
{
    public function demo()
    {
        return PortalProdukHukum::welcome();
    }
}
