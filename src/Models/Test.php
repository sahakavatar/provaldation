<?php

namespace Sahak\Validator\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'testing';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $relations = ['proval'];

}