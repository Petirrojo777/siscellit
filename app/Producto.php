<?php

namespace sisCellit;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';
    
    protected $primaryKey = 'ID_PROD';
    
    public $timestamps=true;

    protected $fillable = [
    	'NOM_PROD',
    	'PIC_PROD',
    	'PRE_PROD'
    ];

    protected $guarded = [

    ];
}
