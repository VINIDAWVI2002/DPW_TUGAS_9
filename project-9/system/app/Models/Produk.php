<?php

namespace App\Models;

class Produk extends Model {
    protected $table = 'Produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:2'
    ];


    function seller()
    {
        return $this->Belongsto(User::class, 'id_user');
    }

    function getHargaStringAttribute()
    {
        return "Rp." . number_format($this->attributes['harga']);
    }

}