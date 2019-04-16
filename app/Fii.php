<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fii extends Model
{
    use SoftDeletes;
 
    /**
     * Opcional, informar a coluna deleted_at como um Mutator de data
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $table = "fii";
    public $timestamps = true;
    //
}
