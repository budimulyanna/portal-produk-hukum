<?php

Route::group(['prefix' => 'portal-produk-hukum'], function() {
    Route::get('demo', 'Bantenprov\PortalProdukHukum\Http\Controllers\PortalProdukHukumController@demo');
});
