<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testtable extends Model
{
    use HasFactory;
    protected $table = 'testtable';
    protected $fillable = [
        'name',
        'age',
    ];
}
