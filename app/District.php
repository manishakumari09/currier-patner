<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    public $timestamps = true;
    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
}
