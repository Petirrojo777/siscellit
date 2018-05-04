<?php

namespace sisCellit;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
	protected $table = 'CIT_CATEGORIA_PROD';
    
    protected $primaryKey = 'ID_CATEGORIA';
    

    protected $fillable = [
    	'NO_CATEGORIA',
    	'ES_CATEGORIA'
    ];

    protected $guarded = [

    ];

}
