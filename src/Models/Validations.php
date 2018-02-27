<?php

namespace Sahak\Validator\Models;

use Illuminate\Database\Eloquent\Model;

class Validations extends Model
{
    protected $table = 'pro_validator';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $relations = ['test'];

    public function test()
    {
        return $this->hasOne('Sahak\Validator\Models\Test', 'pro_validator_id', 'id');
    }
}