<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    
    public function employee(){
        return $this->hasOne('App\Models\Employee');
    }
    public function donate(){
        return $this->belongsTo('App\Models\Donate');
    }
    
    
}
