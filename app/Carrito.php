<?php

namespace sisCellit;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //
    protected $table = 'CIT_REGISTROS_PEDIDOS';
    
    protected $primaryKey = ['ID_PEDIDO','ID_PRODUCTO'];
    

    protected $fillable = [
    	'CANT_REGISTRO',
    	'DES_REGISTRO'
    ];

    protected $guarded = [

    ];
}
