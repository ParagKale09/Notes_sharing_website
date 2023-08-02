<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbackinfo extends Model
{
    use HasFactory;
    protected $table = "feedbackinfo";
    protected $primaryKey = "SerialNo";
}
