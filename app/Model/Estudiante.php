<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estudiante';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'cui_pasaporte';
    
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    //protected $fillable = [];
    protected $guarded = [];
    
}
