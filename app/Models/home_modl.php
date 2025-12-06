<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_modl extends Model
{
    use HasFactory;
    protected $table="home_mig";
    protected $fillable=["id","name","password","created_at","updated_at"];
}
