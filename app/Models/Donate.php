<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    public function blood(){
        return $this->hasOne('App\Models\Blood');
    }
    public function donor(){
        return $this->belongsTo('App\Models\Donor');
    }
}
