<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resgate extends Model
{
    //
    use SoftDeletes;
 
    /**
     * Opcional, informar a coluna deleted_at como um Mutator de data
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = "resgate";
    public $timestamps = true;
}
