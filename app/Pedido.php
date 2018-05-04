<?php

namespace sisCellit;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //

    protected $table = 'CIT_PEDIDO';
    
    protected $primaryKey = 'ID_PEDIDO';
    

    protected $fillable = [
    	'FE_PEDIDO',
    	'ES_PEDIDO',
    	'ID_CLIENTE'
    ];

    protected $guarded = [

    ];
}
