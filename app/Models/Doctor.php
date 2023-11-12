<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Doctor  extends Authenticatable
{
   

    use HasApiTokens, HasFactory, Notifiable;
    public $fillable= ['email','password','phone','name','section_id','status'];


        /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }


    public function section()
    {
        return $this->belongsTo(Section::class , 'section_id');
    }



    
    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class , 'appointment_id');
    }
}
