<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Group extends Model
{
    use HasFactory;

    public $fillable= ['Group_id','Service_id'];
}
