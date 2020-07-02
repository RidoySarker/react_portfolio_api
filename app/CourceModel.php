<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourceModel extends Model
{
    protected $table = 'cources';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
