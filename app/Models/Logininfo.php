<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logininfo extends Model
{
    use HasFactory;

    protected $table = "logininfo";
    protected $primaryKey = "students_id";
}
