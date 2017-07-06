<?php

namespace App\ExtraModules\ProValidator\Models;

use App\Models\BaseModel;

class Validations extends BaseModel
{
    protected $table = 'pro_validator';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $relations = ['test'];

    public function test()
    {
        return $this->hasOne('App\ExtraModules\ProValidator\Models\Test','pro_validator_id','id');
    }
}