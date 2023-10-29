<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public $fillable= ['anme','Total_before_discount','discount_value','Total_after_discount','tax_rate','Total_with_tax'];
}
