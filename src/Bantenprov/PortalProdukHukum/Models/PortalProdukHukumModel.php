<?php namespace Bantenprov\PortalProdukHukum\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The PortalProdukHukumModel class.
 *
 * @package Bantenprov\PortalProdukHukum
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalProdukHukumModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'portal_produk_hukum';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
