<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyUsers extends Model
{
    protected $fillable = ['name', 'position', 'birthday'];
}
