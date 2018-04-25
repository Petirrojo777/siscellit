<?php

namespace sisCellit;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'CIT_PRODUCTO';
    
    protected $primaryKey = 'ID_PRODUCTO';
    

    protected $fillable = [
    	'NO_PRODUCTO',
    	'PIC_PRODUCTO',
    	'PRE_PRODUCTO'
    ];

    protected $guarded = [

    ];
}
