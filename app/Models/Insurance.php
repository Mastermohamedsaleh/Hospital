<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    public $fillable= ['notes','name','insurance_code','discount_percentage','Company_rate','status'];
}
